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
                   
                    <img width="500px" height="300px" src="{{asset('image/banner/banner1.jpg')}}" alt="">   
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form action="{{ route('postregister') }}" method="POST">
                            @csrf
                            <p>   
                                <label> Họ và tên <span>*</span></label>
                                <input type="text" name="username" value="{{ old('username') }}">
                            </p>
                            <p>   
                                <label>Email <span>*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}">
                            </p>
                            <p>   
                                <label>Password <span>*</span></label>
                                <input type="password" name="password">
                            </p>
                            <p>   
                                <label>Xác nhận Password <span>*</span></label>
                                <input type="password" name="repeatPassword">
                            </p>
                            @if($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li style="color:red">{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                        
                    </div>    
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