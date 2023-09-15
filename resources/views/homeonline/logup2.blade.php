<!DOCTYPE html>
<html lang="en" dir=rtl>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script  src="{{asset('JS/regular_expression.js')}}"></script>
   
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Work+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap"
        rel="stylesheet">
    <title>تسجيل دخول</title>
</head>
<body>
    <div class="a">
        
    <div class="alllogup">
        <p>Home<br><span>online</span></p>
            <div class="formlogup">
            <div class="container">
            <form action="{{route('signup')}}" method="POST" onsubmit="return regular_edit_profil()">
                @csrf
              {{--   <label for="em">Email</label> --}}
                
             {{--    <label for="pass">Password</label>  --}}
                <div class="name">
                <input id="name" type="text" name="f_name"  placeholder="الاسم الأول"  required>
                <input id="name2" type="text" name="l_name"  placeholder="الكنية" class="lname" required></div>
                
                 <input type="email" id="em" name="email" placeholder="البريد الالكتروني" >
                  <div class="middle">   <input id="phone" type="text" name="phone"  placeholder="رقم الهاتف" class="phone" required>
                    <select name="country" class="date" id="">
                        <option value="male">ذكر</option>
                        <option value="fmale">انثى</option></select>
                    </div>
             <div><input type="date" name="date" class="date" required>
             <input type="text" name="country" placeholder="البلد" class="date" required></div>
                <input id="pass" type="password"  name="password" value="pass" placeholder="كلمة السر" required>
                <input type="submit" name="logup" value="انشاء حساب" class="logup">
                <h4>ــــــــــــــــــــــــ أو ــــــــــــــــــــــــ</h4> 
               <a href="{{route('login')}}"> <input type="button" name="login" value="تسجيل دخول" class="login"></a>
            </form></div></div></div>
    </div>
 
</body>
</html>