@include('header')
<div class="customer_login">
    <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Quên mật khẩu</h2>

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
                <form method="POST" action="{{ route('quenmatkhau_') }}">
                    @csrf
                    <div class="form-group">
                        <label for="current_password">Email</label>
                        <input type="email" class="form-control" id="current_password" name="email" placeholder="nhập lại email đã đăng ký tài khoản">
                    </div>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
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