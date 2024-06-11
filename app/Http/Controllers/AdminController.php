<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;



use Illuminate\Http\Request;

class AdminController extends Controller
{
     // admin
     public function admin() {
        $data= \App\Models\Product::all();
        return view('admin/product', ['data'=>$data]);
    }
    public function add_product(){
        return view('admin/add_product');
    }
    public function add_product_(Request $request)
    {
        $t = new Product;
        $t->title = $request->input('title');
        // Xử lý upload ảnh
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('image/product/'), $filename);
            $t->image = $filename;
        } else {
            $t->image = $request->input('image');
        }
        $t->price = $request->input('price');
        $t->detail = $request->input('detail');
        $t->category_id = $request->input('category_id');
        $t->save();
        
        return redirect('/admin');
    }
// ---------------------xóa----------------
    public function xoa($id){
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return redirect('/admin')->with('success', 'Sản phẩm đã được xóa thành công.');
        } else {
            return redirect('/admin')->with('error', 'Sản phẩm không tồn tại.');
        }

    }
// ---------------------sửa----------------
    public function edit_product($id){
        $product = Product::find($id);
        return view('admin/edit_product', compact('product'));

    }
    public function updete(Request $request,$id)
        {   
            $product = Product::find($id);

            if ($product) {
                $product->title = $request->input('title');
                $product->price = $request->input('price');
                
                if ($request->hasFile('image')) {
                    $file = $request->file('image');
                    $filename = $file->getClientOriginalName();
                    $file->move(public_path('images'), $filename);
                    $product->image = $filename;
                }
                $product->detail = $request->input('detail');
                $product->category_id = $request->input('category_id');
                $product->save();
    
                return redirect('/admin')->with('success', 'Sản phẩm đã được cập nhật thành công.');
            } else {
                return redirect('/admin')->with('error', 'Sản phẩm không tồn tại.');
            }
        }
    
    // danh mục admin
    public function category() {
        $data= \App\Models\Category::all();
        return view('admin/category', ['data'=>$data]);
    }
    // thêm
    public function add_category(){
        return view('admin/add_category');
    }
    public function add_category_(Request $request)
    {
        $t = new Category;
        $t->name = $request->input('name');
        $t->save();
        
        return redirect('/category');
    }
    // xóa danh mục
    public function xoa_cate($id){
        $category = Category::find($id);
        if ($category->product()->count() > 0) {
            return redirect()->route('category')->withErrors('Danh mục này có chứa sản phẩm, không thể xóa.');
        }
        $category->delete();
        return redirect()->route('category')->with('success', 'Danh mục đã được xóa thành công.');
    }
    // sửa danh mục
    public function edit_category($id){
        $category = Category::find($id);
        return view('admin/edit_category', compact('category'));

    }
    public function updete_cate(Request $request,$id)
        {   
            $category = Category::find($id);

            if ($category) {
                $category->name = $request->input('name');
                $category->save();
                return redirect('/category');
            } else {
                return redirect('/category');
            }
        }

    }
    
   

