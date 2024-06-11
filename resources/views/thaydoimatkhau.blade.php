@include('header')
<div class="customer_login">
    <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Đặt lại mật khẩu</h2>

                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Hiển thị lỗi -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST"  action="{{route('thaydoimatkhau',['token'=>$token])}}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div>
                        <label>Password</label>
                        <input type="password" name="password" required>
                    </div>

                    <div>
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" required>
                    </div>
<br>
                    <button type="submit"  class="btn btn-primary">Đặt lại mật khẩu</button>
                </form>
                     </div>    
                </div>
               

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <img width="500px" height="300px" src="{{asset('image/banner/banner1.jpg')}}" alt="">   
                </div>
                <!--register area end-->
            </div>
</div>
@include('footer')