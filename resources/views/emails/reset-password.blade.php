<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h2>Yêu cầu đặt lại mật khẩu</h2>
    <p>Xin chào {{ $usermail->name }},</p>
    <p>Bạn đã yêu cầu đặt lại mật khẩu. Vui lòng nhấp vào liên kết bên dưới để đặt lại mật khẩu của bạn:</p>
    <a href="{{route('thaydoimatkhau',['token'=>$token])}}">Reset Password</a>
</body>
</html>

