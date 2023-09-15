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
    <script src="{{asset('JS/popup_image.js')}}"></script>
    <script src="JS/home.js"></script>
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
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
       <a href="{{route('home')}}"> <h3 class="p-relative txt-c mt-0" style="color:#dc8035">Home 
          <samp class="h1_online" >Online</samp></h3></a>
        <ul>
          <li>
            <a class=" d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('home')}}">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>الصفحة الرئسية</span>
            </a>
          </li>
          <li>
          <li>
            
              <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('showprof')}}">
              <i class="fa-regular fa-user fa-fw"></i>
              <span>الملف الشخصي</span>
            </a>
           
             
             
          </li>
           
          <li id="add" style="padding-right: 8px;">
            <!-- <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="" onclick="popup()"> -->
            <i class="fa-regular fa-file fa-fw"></i>
            <span id="addProductButton" onclick="popup()">إضافة منتج</span>
            <div class="links">
              <ul id="myModal">
                <span class="close1" onclick="Close()">&times;</span>
                <li><a href="{{route('AddProduct')}}" rel="">فيلا - شاليه- منزل</a> </li>
                <li><a href="{{route('addland')}}">ارض</a> </li>
                <li><a href="{{route('addmarket')}}">محل</a> </li>
              </ul>
            </div>
            <!-- </a> -->
          </li>
         
         
          
           <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('about_me')}}">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span>حول</span>
            </a>
          </li>
         {{--  <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('dashboard')}}">
              <i class="fa-regular fa-Maneger fa-fw"></i>
              <span > 
                @if (auth()->User()->type=='0')
              <span> </span>
           @else 
           <p style="color:red;font-size:15px;">تم الدخول كمدير للموقع</p>
             <p style="color:red">صفحة ادارة الموقع</p>
            
           </span>
           @endif 
             </li> </span>
            </a>
          </li>  --}}
   
         {{--  @if ( Auth::check()&&  App\Models\User::where('type','like' ,1 ))
       
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('dashboard')}}">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span>اعدادت الموقع</span>
            </a>
          </li>@endif --}}
        </ul>
        <br><br><br><h4 style="text-align: center;">مساحة اعلانية</h4><br><br><br><br>
      </div>
    
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
          {{--   <input class="p-10" type="search" placeholder="ابحث" /> --}}
          <form  action="{{route('search')}}" method="post">
            @csrf
            <input class="p-10" name="search" type="search" placeholder="ابحث عن عقار" />
          </form>
        
          </div> 

          <nav>
            <i class="fas fa-bars toggle-menu"></i>
            <ul>
                <li><a class="" href="{{route('home2')}}">منزل</a></li>
              {{--   <li><a href="#serveces">شقة</a></li> --}}
                <li><a href="{{route('home3')}}">فيلا</a></li>
                <li><a href="{{route('home4')}}">شاليه</a></li>
                <li><a href="{{route('home5')}}">أرض</a></li>
                <li><a href="{{route('home6')}}">محل</a></li>
            </ul> 
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
               <p>{{ auth()->User()->name }}</p>
               <a href="{{route('logout')}}">تسجيل خروج</a>
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

@yield('home')
@yield('profile')







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