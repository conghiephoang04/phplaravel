@include('header')
<div class="customer_login">
    <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>Change Password</h2>

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
                <form method="POST"  action="{{route('doimatkhau_')}}">
                    @csrf
                    <div class="form-group" >
                        <label for="current_password">Mật khẩu hiện tại</label>
                        <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>

                    <div class="form-group">
                        <label for="new_password">Mật khẩu mới</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" >
                    </div>

                    <div class="form-group">
                        <label for="new_password_confirmation">Xác nhận mật khẩu mới</label>
                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" >
                    </div>

                    <button type="submit" class="btn btn-primary">Đổi Mật Khẩu</button>
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