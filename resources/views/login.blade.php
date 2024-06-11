@include('header')
<!--breadcrumbs area start-->
  <div class="breadcrumbs_area">
    <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="/">home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>login</li>
                    </ul>
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                
                </div>
            </div>
        </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="customer_login">
    <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form action="{{route('postlogin')}}" method="POST">
                            @csrf   
                            <p>   
                                <label>Email <span>*</span></label>
                                <input type="email" name="{{ old('email')}}"  placeholder="nhập email của bạn">
                             </p>
                             <p>   
                                <label>Password <span>*</span></label>
                                <input type="password" name="password" placeholder="vui lòng nhập mật khẩu">
                             </p>   
                            <div class="login_submit">
                                <button type="submit">login</button>
                                @if($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color:red">{{$error}}</li>
                                    @endforeach
                                </ul>
                                @endif
                                 <label for="remember">
                                   <!-- Button trigger modal -->
                                   <a href="{{route('quenmatkhau')}}">Bạn quên mật khẩu ư</a>

                <!--login area start-->
                                    
                                </label>
                                <a href="{{route('register')}}">Bạn chưa có tài khoản</a>
                            </div>

                        </form>
                     </div>    
                </div>
               

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <<img width="500px" height="300px" src="{{asset('image/banner/banner1.jpg')}}" alt="">   
                </div>
                <!--register area end-->
            </div>
</div>
<!-- customer login end -->

</div>
<!--pos page inner end-->
</div> 
</div>
<!--pos page end-->
@include('footer')
