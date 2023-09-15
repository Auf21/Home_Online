<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/framework.css')}}" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}" />
    <script src="{{asset('JS/profile.js')}}"></script>
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
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('dashboard')}}">
              <i class="fa-regular fa-chart-bar fa-fw"></i>
              <span>لوحة تحكم</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="{{route('home')}}">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>الصفحة الرئسية</span>
            </a>
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
         {{--  <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div> --}}
          {{-- <div class="icons d-flex align-center">
            <span class="notification p-relative">
              <i class="fa-regular fa-bell fa-lg"></i>
            </span>
          </div> --}}
        </div>
        <!-- End Head -->
        <h1 class="p-relative">لوحة التحكم</h1>
        <div class="wrapper d-grid gap-20">
         
          <!-- Start Quick Draft Widget -->
          <div class="quick-draft p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">إشعار جماعي</h2>
            <p class="mt-0 mb-20 c-grey fs-15">اكتب إشعار سيظهر لجميع المستخدمين</p>
            <form>
              <input class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" type="text" placeholder="عنوان الإشعار" />
              <textarea class="d-block mb-20 w-full p-10 b-none bg-eee rad-6" placeholder="محتوى الإشعار"></textarea>
              <input class="save d-block fs-14 bg-blue c-white b-none w-fit btn-shape" type="submit" value="ارسال" />
            </form>
          </div>
          <!-- End Quick Draft Widget -->
          
          <!-- Start Ticket Widget -->
          <div class="tickets p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">احصائيات الموقع</h2>
            <p class="mt-0 mb-20 c-grey fs-15">كل ما يخص المستخدمين والمنتجات</p>
            <div class="d-flex txt-c gap-20 f-wrap">
              <a href="#users" >
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-list fa-2x mb-10 c-orange"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5"> المستخدمين</span>
               {{$count_user}}
              </div>
              </a>
              <a href="#products">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">جميع العقارت</span>
               {{ $count_home}}
              </div>
            </a>
              <a href="#products">
              <div class="box p-20 rad-10 fs-13 c-grey ">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">منزل</span>
               {{   $count_home_home}}
              </div>
            </a>
              <a href="#products">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">شاليه</span>
               {{ $count_home_ah}}
              </div>
            </a>
              <a href="#products">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">ارض</span>
               {{ $count_home_land}}
              </div>
            </a>
           
              <a href="#products">
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">فيلا</span>
               {{ $count_home_vila}}
              </div>
            </a>
                  <a href="#products">
                  <div class="box p-20 rad-10 fs-13 c-grey">
                    <i class="fa-solid fa-spinner fa-2x mb-10 c-blue"></i>
                    <span class="d-block c-black fw-bold fs-25 mb-5">محل</span>
                  {{ $count_home_market}}
                  </div>
                </a>
            <!-- <a href="" >
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-circle-check fa-2x mb-10 c-green"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">1900</span>
                Closed
              </div>
              </a>
              <a href="" >
              <div class="box p-20 rad-10 fs-13 c-grey">
                <i class="fa-regular fa-rectangle-xmark fa-2x mb-10 c-red"></i>
                <span class="d-block c-black fw-bold fs-25 mb-5">100</span>
                Deleted
              </div>
              </a> -->
            </div>
          </div>
          <!-- End Ticket Widget -->
        </div>
        <!-- Start Projects Table -->
        <div class="projects p-20 bg-white rad-10 m-20" id="users">
          {{-- <h2 class="mt-0 mb-20">
            <ul>
              <li>المستخدمين</li>
              <li><a href="{{route('active')}}">فعال</a></li>
              <li><a href="{{route('dont_active')}}">ملغى تفعيله</a></li>
              <li><a href="{{route('mange')}}">مدير</a></li>
          </ul> 
          </h2> --}}
          {{-- <h2 class="mt-0 mb-20">المستخدمين</h2> --}}
          <div class="responsive-table">
            <table class="fs-15 w-full">
              <thead>
                <tr>
                  <td>#</td>
                  <td>الإسم الأول</td>
                  <td>الإسم الثاني</td>
                  <td>رقم الهاتف</td>
                  <td>الإيميل</td>
                  <td>كلمة السر</td>
                  <td class="width">تعديل</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td> {{$user->name}}</td>
                  <td>{{$user->lname}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->password}}</td>
                  
                   <td >
                    
                    {{-- <div class="profile-page m-20">
                        <div class="info-box w-full txt-c-mobile">
                          
                          <div class="box p-20 d-flex align-center dash"> --}}
                            <div class="fs-14">
                              <form id="qqw" action="{{route('edit_admin',$user->id)}}" method="POST" >
                                @csrf 
                              
                                
                                <div class="edit_pro">
                                  <label for="">كلمة السر الجديدة:</label>
                                  <input type="text" name="pass" class="edit">
                                </div> 
                                <label for="active"> وضع الحساب</label>
                              
                                <select name="avilable" class="edit">
                                  <option value="1">تفعيل</option>
                                  <option value="0">الغاء تفعيل</option>
                                </select>
                                <div class="fs-14 b1">
                                   {{-- <button class="button_edit" onclick="">تعديل</button> -- --}}
                                  <input type="submit" value="تعديل" name="save-edit" >
                                </div>
                              </form>
                           
                             {{--  <a style="background-color: blue;color:white; padding:5px;" href=" {{route('edit_admin',$user->id)}}">تعديل</a> --}}
                            </div>
                         
                      {{--   <!-- popup -->
                        <div id="myModal1" class="modal">
                          <!-- The Close Button -->
                          <span class="close" onclick="Close()">&times;</span>
                          <!-- Modal Content -->
                          <div class="modal-content">
                            <form action="{{route('edit_admin',$user->id)}}" method="POST" >
                              @csrf 
                            
                              
                              <div class="edit_pro">
                                <label for="">كلمة السر الجديدة:</label>
                                <input type="text" name="pass" class="edit">
                              </div> 
                              <label for="active"> وضع الحساب</label>
                            
                              <select name="avilable" class="edit">
                                <option value="1">تفعيل</option>
                                <option value="0">الغاء تفعيل</option>
                              </select>
                              <div class="fs-14 b1">
                                {{-- <button class="button_edit" onclick="">تعديل</button> --
                                <input type="submit" value="تعديل" name="save-edit" >
                              </div>
                            </form>
                          </div>
                        </div> --}}
                      </td>
                </tr>  @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Projects Table -->

        <!-- Start Projects Table -->
        <div class="projects p-20 bg-white rad-10 m-20" id="products">
          <h2 class="mt-0 mb-20"> 
            <ul>
                <li>العقارات</li>
                <li><a name="home" href="{{route('home11')}}">الكل</a></li>
                <li><a name="home" href="{{route('home61')}}">منزل</a></li>
                <li><a href="{{route('home7')}}">فيلا</a></li>
                <li><a href="{{route('home8')}}">شاليه</a></li>
                <li><a href="{{route('home9')}}">أرض</a></li>
                <li><a href="{{route('home10')}}">محل</a></li> 
            </ul> </h2>
          {{-- <h2 class="mt-0 mb-20">المنتجات</h2> --}}
          <div class="responsive-table">
            <table class="fs-15 w-full table2">
              <thead>
               
                <tr>
                  <td>#</td>
                  <td>العنوان</td>
                  <td>السعر</td>
                  <td>عدد الغرف</td>
                  <td>المساحة</td>
                  <td>شرح</td>
                  <td>التكييف</td>
                  <td>الطابق</td>
                  <td>الكسوة</td>
                  <td>عدد غرف النوم</td>
                  <td>كراج</td>
                  <td>فسحة خارجية</td>
                  <td>نوع العقار</td>
                  <td>صاحب العرض</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($homef as $homef)
                <tr>
                  <td>{{$homef->id}}</td>
                  <td>{{$homef->address}}</td>
                  <td>{{$homef->price}}</td>
                  <td>{{$homef->room_no}}</td>
                  <td>{{$homef->area}}</td>
                  <td>{{$homef->info_position}}</td>
                  <td>{{$homef->condition}}</td>
                  <td>{{$homef->floor}}</td>
                  <td>{{$homef->cladding}}</td>
                  <td>{{$homef->bathroom_no}}</td>
                  <td>{{$homef->carage}}</td>
                  <td>{{$homef->expanse}}</td>
                  <td>{{$homef->type}}</td>
                  <td>{{$homef->user_id}}</td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Projects Table -->
      </div>
    </div>
  </body>
</html>