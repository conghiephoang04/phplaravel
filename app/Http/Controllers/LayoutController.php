<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

// -------------------------
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Mail\GuiEmail;
use Illuminate\Support\Facades\Mail;
class LayoutController extends Controller
{
    // sản phẩm trong trang chu va allproduct
    public function showProduct(){
        $product = DB::table('products')->get();
        return view('layout',['product'=>$product]);
    }
    // sản phẩm trong product toàn bộ
    public function showAllProduct(){
        
        $product = DB::table('products')->get();
        return view('product',['product'=>$product]);
    }
    // sản phảm chi tiết
    function SingleProduct($id) {
        $sanpham = DB::table('products')->where('id', $id)->first();
        return view('SingleProduct', ['sanpham' => $sanpham]);
    }
    // danh mục sản phẩm 
    function sanphamtrongloai($category_id=0){
        $listpro = DB::table('products')->where('category_id', $category_id)->get();
        $data = ['category_id'=>$category_id , 'listpro'=>$listpro];
        return view('product',$data);

    }
    // giỏ hàng-----------------------------------------------------------------------------------------
  
   
    // đăng nhập
    public function login() {
        return view('/login');
    }
    public function postlogin(Request $req) {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'password.required' => 'Vui lòng nhập password'
        ]);
    
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
    
            if ($user->role === 'admin') {
                return redirect('admin'); // Nếu là admin, chuyển hướng đến trang admin
            } else {
                $req->session()->put('username', $user->username); // Lưu tên người dùng vào session
                return redirect('/'); // Nếu là user, chuyển hướng đến trang chủ
            }
        } else {
            return redirect('login')->withInput()->withErrors('Sai email hoặc password');
        }
    }
    
    // đăng ký
    public function register() {
        return view('register');
    }
    
    public function postregister(Request $req) {
        $req->validate([
            'username' => 'required|unique:users,username', // Thêm xác thực cho username
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'repeatPassword' => 'required|same:password|min:8'
        ], [
            'username.required' => 'Vui lòng nhập họ và tên',
            'username.unique' => 'Họ và tên đã được đăng kí',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng email',
            'email.unique' => 'Email đã được đăng kí',
            'password.required' => 'Vui lòng nhập password',
            'repeatPassword.required' => 'Vui lòng nhập lại password',
            'repeatPassword.same' => 'Nhập lại mật khẩu không khớp'
        ]);
        $user = User::create([
            'username' => $req->username,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'role' => 'user', // Gán mặc định là 'user'
        ]);
    
        Auth::login($user);
    
        return redirect('login');
    }
    // đăng xuất
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
    //đổi mật khẩu
    public function doimatkhau()
    {
        return view('doimatkhau');
    }
    public function doimatkhau_(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không chính xác']);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('doimatkhau')->with('success', 'Mật khẩu đã được thay đổi thành công');
    }
    public function profile() {

        return view('profile');
    }
    // quên mật khẩu
    public function quenmatkhau(){
        return view('quenmatkhau');
    }
    public function quenmatkhau_(Request $req)
{
    $req->validate([
        'email' => 'required|email',
    ], [
        'email.required' => 'Vui lòng nhập email',
        'email.email' => 'Vui lòng nhập đúng định dạng email',
    ]);

    $usermail = User::where('email', $req->email)->first();

    if (!$usermail) {
        return back()->with('error', 'Email không tồn tại');
    }

    // Tạo token reset password
    $token = Str::random(64);

    // Lưu token vào bảng password_resets
    DB::table('password_resets')->insert([
        'email' => $req->email,
        'token' => $token,
        'created_at' => Carbon::now()
    ]);

    // Gửi email
    Mail::to($req->email)->send(new GuiEmail($usermail, $token));

    return back()->with('message', 'Email đã được gửi để đặt lại mật khẩu.');
}
    public function thaydoimatkhau($token){
        return view('thaydoimatkhau',compact('token'));
    }
    public function  thaydoimatkhau_(Request $request)
        {
            $request->validate([
            
                'email' => 'required|email',
                'password' => 'required|confirmed|min:8',
                'token' => 'required',
            ]);
        
            // Kiểm tra xem token và email có tồn tại và khớp nhau không
            $reset = DB::table('password_resets')->where('email', $request->email)->first();
        
         
            // Cập nhật mật khẩu trong cơ sở dữ liệu
            User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
        
            // Xóa thông tin đặt lại mật khẩu khỏi cơ sở dữ liệu
            DB::table('password_resets')->where('email', $request->email)->delete();
        
            // Chuyển hướng người dùng về trang chủ sau khi đặt lại mật khẩu thành công
            return redirect('/')->with('status', 'Password reset successful. Please log in with your new password.');
            
        }

}
