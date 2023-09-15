<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    {{--  --}}
    <script src="{{ asset('public/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('public/js/app.js') }}"></script>
<link href="{{ asset('public/css/sweetalert2.min.css') }}" rel="stylesheet">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap"
        rel="stylesheet">
    <title>تسجيل دخول</title>
</head>
<body>
    <div class="alllog">
<p>Home<br><span>online</span></p>
{{-- <img decoding="async" src="{{asset('images\2\ل.png')}}" alt="home" class="welcome_img"> --}}
    <div class="formlogin">
    <div class="container">
    <form action="{{route('signin')}}" method="POST">
        @CSRF
       {{--  <label for="em">Email</label> --}}
        <input type="email" id="em" name="email" placeholder="البريد الالكتروني" ><br>
        {{-- <label for="pass">Password</label> --}}
        <input type="password" id="pass" name="password" value="pass" placeholder="كلمة السر">
        <input type="submit" name="login" value="تسجيل دخول" class="login">
        <h4>ــــــــــــــــــــــــ أو ــــــــــــــــــــــــ</h4>
     <a href="{{route('logup')}}">   <input type="button" name="logup" value="انشاء حساب" class="logup"></a>

    </form></div></div></div>
    {{-- @if ($errors->has('login'))
    <div class="alert alert-danger">{{ $errors->first('login') }}</div>
@endif --}}
{{-- @if (session('success'))
<script>
    Swal.fire({
        title: '{{ session('success') }}',
        icon: 'success'
    });
</script>
@endif
 --}}

</html>