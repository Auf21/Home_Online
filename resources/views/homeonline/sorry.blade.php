<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>home_page</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/index.css" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&#038;display=swap" rel="stylesheet" />
     <!-- Arabic font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@1&family=Cairo:wght@200;300;700;800&display=swap" rel="stylesheet"> 
  </head>
  <body>

        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
          {{--   <input class="p-10" type="search" placeholder="ابحث" /> --}}
         {{--  <form  action="{{route('search')}}" method="post">
            @csrf
            <input class="p-10" name="search" type="search" placeholder="ابحث عن عقار" />
          </form> --}}
        
          </div>

          <nav>
            {{-- <i class="fas fa-bars toggle-menu"></i> --}}
           {{--  <ul>
                <li><a class="" href="{{route('home2')}}">منزل</a></li>
              {{--   <li><a href="#serveces">شقة</a></li> --}}
               {{-- <li><a href="{{route('home3')}}">فيلا</a></li>
                <li><a href="{{route('home4')}}">شاليه</a></li>
                <li><a href="{{route('home5')}}">أرض</a></li>
                <li><a href="{{route('home6')}}">محل</a></li>
            </ul>  --}}
        </nav>

        <i class="fa-solid fa-right-to-bracket login"></i>

          <div class="icons d-flex align-center">
            <span class="notification p-relative">
             
              {{--  @if (auth('web'))
               {{$name -> $name}}
               @else
               <a href="{{route('login')}}" class="textlogin">
                 الإشتراك أو التسجيل
               </a>
               @endif  --}}
               @if (Auth::check())
               <p>{{ Auth::User()->name }}</p>
               <a href="{{ auth('web')->logout()}}">تسجيل خروج</a>
           @else
           <span>
             <a href="{{route('login')}}">
              تسجيل الدخول  
             </a>
           </span>
           @endif
            <!-- <img decoding="async" src="imgs/avatar.png" alt="" /> -->
          </div>
        </div>
        <!-- End Head -->
        
       <!--start extended page -->

       <div class="soryy">
        <i class="fab fa-sorry-f"></i>
        <h1>عذراً تم الغاء تفعيل حسابك بسبب قيامك بخطأ ما، راجع مدير الموقع</h1>
    </div>




       <!--end extended page -->

        <!-- start Footer -->
     <div class="footer">
      <div class="contener">
        <h3 class="p-relative txt-c mt-0" style="color:#dc8035">Home 
          <samp class="h1_online" >Online</samp></h3>
        <p>We Are Social</p>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fas fa-home"></i>
          <i class="fab fa-linkedin"></i>
        </div>
        <p class="copyright">&copy; 2021 <span>Home Online</span> All Right Reserved</p>
      </div>
    </div>
    <!-- End Footer -->
       
      </div>
    </div>
     
  </body>
</html>