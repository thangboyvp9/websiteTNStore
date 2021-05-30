<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register WebTNStore</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>  
    <link rel="stylesheet" href="{{asset('CSS/register.css')}}">
</head>
<body>
    <div class='login'>
        <h2>Đăng ký ngay</h2>
        <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert" style="color: red">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
        @if(count($errors)>0)
        <div class="alert alert-danger" style="color: red">
            @foreach($errors->all() as $error)
            {{$error}}
            @endforeach
        </div>
        @endif
        <form action="/register" name="formSignUp" id="SignUp" method="post">
            @csrf
            <input id='username' name='username' required="" placeholder='Tài Khoản' type='text'>
            <input id='password' name='password' required="" placeholder='Mật Khẩu' type='password'>
            <input id='re_password' name='re_password' required="" placeholder='Nhập Lại Mật Khẩu' type='password'>
            <div class='agree'>
                <input id='agree' name='agree' type='checkbox'>
                <label for='agree'></label>Chấp nhận các quy tắc và điều kiện
                
            </div>
            <input class='animated' type='submit' value='Đăng ký'>
        </form>
        <a class='forgot' href="{{ route('/login/index') }}">Bạn đã có tài khoản?</a>
    </div>
</body>
</html>