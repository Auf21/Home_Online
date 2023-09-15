<!DOCTYPE html>
<html dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <!-- java secript -->
    <script src="{{asset('JS/profile.js')}}"></script>
    <script  src="{{asset('JS/regular_expression.js')}}"></script>
    {{-- <script src="{{asset('JS/home.js')}}"></script> --}}

    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/framework.css')}}" />
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
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0" style="color:#dc8035">Home 
            <samp class="h1_online" >Online</samp></h3>
        <ul>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('home')}}">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>الصفحة الرئيسية</span>
            </a>
          </li>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('showprof')}}">
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
        </ul>
      </div>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
            <span class="notification p-relative">
              <i class="fa-regular fa-bell fa-lg"></i>
            </span>
            <img decoding="async" src="imgs/avatar.png" alt="" />
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">معلومات الحساب</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <div class="avatar-box txt-c p-20">
              <img decoding="async" class="rad-half mb-10" src="icon/bussiness-man.png" alt="" />
              <h3 class="m-0">{{$user->name}} {{$user->lname}}</h3>
              <!-- <p class="c-grey mt-10">Level 20</p>
              <div class="level rad-6 bg-eee p-relative">
                <span style="width: 70%"></span> -->
              </div>
              <div class="rating mt-10 mb-10">
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
                <i class="fa-solid fa-star c-orange fs-13"></i>
              </div>
              <!-- <p class="c-grey m-0 fs-13">550 Rating</p> -->
            </div>
            <div class="info-box w-full txt-c-mobile">
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey fs-15 m-0 w-full">معلومات عامة:</h4>
                <div class="fs-14">
                  <span class="c-grey">الإسم الكامل:</span>
                  <span>{{$user->name}} {{$user->lname}}</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">الجنس:</span>
                  <span>{{$user->gender}}</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">البلد:</span>
                  <span>{{$user->country}}</span>
                </div>
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <h4 class="c-grey w-full fs-15 m-0">معلومات شخصية</h4>
                <div class="fs-14">
                  <span class="c-grey">الإيميل:</span>
                  <span>{{$user->email}}</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">الهاتف:</span>
                  <span>{{$user->phone}}</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">تاريخ الولادة:</span>
                  <span>{{$user->birthday_date}}</span>
                </div>
              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
             {{--    <h4 class="c-grey w-full fs-15 m-0">معلومات سرية</h4> --}}
               {{--  <div class="fs-14">
                  <span class="c-grey">كلمة السر:</span>
                  <span>************</span>
                </div> --}}
                <div class="fs-14">
                  <button onclick="edit()">تعديل</button>
                </div>
              </div>
              <!-- End Information Row -->
            </div>
            <!-- popup -->
            <div id="myModal1" class="modal">
              <!-- The Close Button -->
              <span class="close" onclick="Close()">&times;</span>
              <!-- Modal Content -->
              <div class="modal-content">
                <form action="{{route('edit2',$user->id)}}" method="POST" onsubmit="return regular_edit_profil()" >
                  @csrf 
                  <div class="edit_pro">
                    <label for="">الإسم :</label>
                    <input id="name" type="text"  class="edit" name="f_name" value="{{$user->name}}" placeholder="" required>
                  </div>
                  <div class="edit_pro">
                    <label for="">الكنية:</label>
                    <input id="name2" type="text"  class="edit" name="l_name" value="{{$user->lname}}" required>
                  </div>
                  <div class="edit_pro">
                    <label for="">الجنس:</label>
                    <input type="text"  class="edit" name="gender" value="{{$user->gender}}" required>
                  </div>
                  <div class="edit_pro">
                    <label for="">البلد:</label>
                    <input type="text"  class="edit" name="country" value="{{$user->country}}" required>
                  </div>
                  <div class="edit_pro">
                    <label for="">الإيميل:</label>
                    <input type="text"  class="edit" name="email" value="{{$user->email}}" required>
                  </div>
                  <div class="edit_pro">
                    <label  for="">الهاتف:</label>
                    <input id="phone" type="tel"  class="edit" name="phone" value="{{$user->phone}}" required>
                  </div>
                 {{--  <div class="edit_pro">
                    <label for="">كلمة السر القديمة:</label>
                    <input type="text" required class="edit" {{$user->password}}>
                  </div>
                  <div class="edit_pro">
                    <label for="">كلمة السر الجديدة:</label>
                    <input id="pass" type="text" required class="edit">
                  </div> --}}
                  <div class="fs-14 b1">
                    {{-- <button class="button_edit" onclick="">تعديل</button> --}}
                    <input type="submit" value="تعديل" name="save-edit" >
                  </div>
                </form>
              </div>
            </div>
          <!-- </div> -->
          <!-- End Overview -->
          <!-- Start Other Data -->
          <h1 class="p-relative">عروضي</h1>
          <div class="courses-page d-grid m-20 gap-20">
        {{--     <!-- popup -->
            <div id="mydelet" class="modal-delet">
              <div class="modal-content-delet">
                <label for="">هل انت متأكد من انك تريد حذف المنتج؟</label>
              <!-- Modal Content -->
              <div class="fs-14 b1">
                <button li class="button_edit" onclick="">حذف</button>
              </div></div>
              <!-- The Close Button -->
              <span class="close" onclick="Close2()">&times;</span>
            </div>
            <!-- end popup --> --}}

 <!-- start box -->  
 
 @foreach ($home as $home)
 <div class="course bg-white rad-6 p-relative">
  
  <div class="box">
    @foreach ($home->image as $img) 
    <div class="mySlides fade">
      <img id="myImg"  class="cover" src="{{URL( 'images/home/'."$img->path??" )}}  " alt="2" {{-- onclick="openModal(this)" --}}>
    </div>
 <form {{-- class="delet" --}} action="{{route('process.destroy',$home->id)}}" method="post" orm>
  @csrf
@method('delete') 
  <input class="delet" type="submit" value="حذف العقار">  
</form>
 <form action="{{route('go_to_edit_product',$home->id)}}" method="post" orm>
  @csrf

<input class="edit2" type="submit" value="تعديل معلومات العقار">  
</form>
{{--   <a href="{{route('process.destroy',$home->id)}}"  onclick="delet()"  class="delet">حذف العقار</a> --}}
{{--   <a href="{{ route('homeonline.edit', $home->id) }}"  onclick="delet()" class="edit">Edit</a> --}}
@endforeach  
</div>
  <div class="p-20">
    <h4 class="m-0">{{$home->type}} {{$home->cladding}}</h4></h4>
    <p class="description c-grey mt-15 fs-14">
      {{$home->address}}
    </p>
  </div>
  <div class="info p-15 p-relative between-flex">
    <span class="title bg-blue c-white btn-shape"><a href="{{route('Showproduct',$home->id)}}" style="color: white;">مزيد_من_المعلومات</a></span>
    <span class="c-grey">
      <i class="fa-regular fa-room"></i>
      {{$home->room_no}}
    </span>
    <span class="c-grey">
      {{$home->price}}
      <i class=""> ل.س</i>
    </span>
  </div>
  
</div> @endforeach  
   <!-- End Other Data -->
        </div>
      </div>
    </div>
  </body>
</html>