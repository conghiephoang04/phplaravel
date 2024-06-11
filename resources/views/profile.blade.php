@include('header')


{{-- css --}}
<style>
    .container-fuild {
    justify-content: center;
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
  
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin-left: 50px
}

.profile-container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px;
    padding: 20px;
    text-align: center;
}

.profile-header {
    margin-bottom: 20px;
}

.profile-avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
}

.profile-name {
    font-size: 24px;
    margin: 10px 0 5px;
}

.profile-email {
    color: #888;
    margin-bottom: 20px;
}

.profile-details {
    text-align: left;
}

.profile-details h2 {
    margin-bottom: 10px;
    font-size: 20px;
    border-bottom: 2px solid #f4f4f9;
    padding-bottom: 5px;
}

.profile-details p {
    margin: 10px 0;
    font-size: 16px;
}

</style>
    <div class="container-fuild">
        <div class="row">
            <div class="profile-container col-6">
                <div class="profile-header">
                    <img src="{{asset('image/portfolio/port7.jpg')}}" alt="Avatar" class="profile-avatar">
                    <h1 class="profile-name">{{Auth::user()->username}}</h1>
             
                </div>
                <div class="profile-details">
                    <h2>Personal Information</h2>
                    <p><strong>Email:</strong> {{Auth::user()->email}}</p>
                    <p><strong>Role:</strong> {{Auth::user()->role}} </p>
                    <p><strong>Security</strong></p>
                    <p>
                        <a href="/doimatkhau">Bạn muốn thay đổi mật khẩu</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <img width="400px" height="500px" src="{{asset('image/portfolio/baeiu.jpg')}}" alt="">   
            </div>
        </div>
    </div> 

@include('footer')