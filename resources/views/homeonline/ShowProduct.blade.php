<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ShowProduct</title>
    <!-- java secript -->
    <script src="{{asset('JS/slider_images.js')}}"></script>
    <script src="{{asset('JS/popup_image.js')}}"></script>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{asset('css/framework.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ShowProduct.css')}}">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&#038;display=swap" rel="stylesheet" />
    <!-- Arabic font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@1&family=Cairo:wght@200;300;700;800&display=swap" rel="stylesheet">
  </head>
<body>
<!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
           <div>
               <i class="fa-solid fa-right-to-bracket login"></i>
               <a href="" class="textlogin">
                {{-- @if (Auth::check())
                <p>{{ Auth::User()->name }}</p>
                <a href="{{ auth('web')->logout()}}">تسجيل خروج</a>

            @endif --}}

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
               </a>
          </div>
          
          <a href="{{route('home')}}" class="logo">
               <h3 class="p-relative txt-c mt-0" style="color:#dc8035">Home 
               <samp class="h1_online" >Online</samp></h3>
          </a>
          
          {{-- <div class="search p-relative">
              <input class="p-10" type="search" placeholder="Type A Keyword" />
           </div> --}}

           
          
        </div>
        <!-- End Head -->
        <!-- start content -->
        <div class="content">
            <div class="contener">
                <div class="images_top">
                  {{-- <div class="mySlides fade mySlides_one">
                    <img id="myImg" class="source-image" src="" alt="" onclick="openModal(this)">
                  </div> --}}
                  
                  <div id="myModal" class="modal">
                    <!-- The Close Button -->
                    <span class="close" onclick="Close()">&times;</span>
                    <!-- Modal Content (The Image) -->
                    <img class="modal-content destination-image" id="img01" src="">
                  </div>
                   @foreach ($img as $image)  
                  <div class="mySlides fade">
                    <img id="myImg"  src="{{URL('/images/home/'.$image->path)}}"  alt="" onclick="openModal(this)"/>
                  </div>
                  
               @endforeach 
                  <!-- The Modal -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <!-- The dots/circles -->
                <div style="text-align:center; padding-top: 10px;" >
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
                  <span class="dot" onclick="currentSlide(4)"></span>
                </div>
            </div>
        </div>
        <!-- end content -->
        <!-- start information -->
        <div class="information">
            <div class="contener">
                <div class="content">
                    <div class="location">
                       <h1>
                         <span>{{$home_info->address}}</span>
                         <br>
                        
                       </h1>
                       <div class="element">
                        <i class="fa-solid fa-house" ></i>
                        <span name="room">{{$home_info->room_no}}</span>
                        <i class="fa-solid fa-ruler-horizontal" ></i>
                        <span name="area">{{$home_info->area}} متر</span>
                       </div>
                    </div>
                    <div class="price">
                      <h1>{{$home_info->price}}</h1>
                      <i class="">ل.س</i>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- end information -->
        <!-- start explain -->
        <div class="explain">
          <div class="contener">
            <div class="content">
              <hr>
              <div class="description">
                <h3>وصف العقار</h3>
                <P>{{$home_info->info_position}}</P>
              </div>
              <hr>
              <div class="highlights"><h3> ميزات العقار</h3>
                <div class="all_flex">
                  <div class="all"> 
                    <i class="fa-solid fa-temperature-three-quarters"></i>
                    <div class="all2">
                      <div class="info1">التكييف:</div>
                      <div class="info2">{{$home_info->condition}}</div>
                    </div>
                  </div>
                  <div class="all"> 
                    <i class="fa-brands fa-codepen"></i>
                    <div class="all2">
                      <div class="info1">فسحة خارجية:</div>
                      <div class="info2">{{$home_info->expanse}}</div>
                    </div>
                  </div>                                               
                  <div class="all"> 
                    <i class="fa-solid fa-building"></i>
                    <div class="all2">
                      <div class="info1">الطابق:</div>
                      <div class="info2">{{$home_info->floor}}</div>
                    </div>
                  </div>
                  <div class="all"> 
                    <i class="fa-solid fa-palette"></i>
                    <div class="all2">
                      <div class="info1">الإكساء:</div>
                      <div class="info2">{{$home_info->type}}-{{$home_info->cladding}}</div>
                    </div>
                  </div>
                  <div class="all"> 
                    <i class="fa-solid fa-bath"></i>
                    <div class="all2">
                      <div class="info1">عدد الحمامات:</div>
                      <div class="info2">{{$home_info->bathroom_no}}</div>
                    </div>
                  </div>  
                  <div class="all"> 
                    <i class="fa-solid fa-bed"></i>
                    <div class="all2">
                      <div class="info1"> عدد غرف النوم:</div>
                      <div class="info2">{{$home_info->brdroom_no}}</div>
                    </div>
                  </div>
                  <div class="all"> 
                    <i class="fa-solid fa-car"></i>
                    <div class="all2">
                      <div class="info1">موقف سارات:</div>
                      <div class="info2">{{$home_info->carage}}</div>
                    </div>
                  </div> 
                  <div class="all"> 
                    <i class="fa-solid fa-calendar"></i>
                    <div class="all2">
                      <div class="info1">تاريخ الادراج:</div>
                      <div class="info2">{{$home_info->created_at}}</div>
                    </div>
                  </div>  
                </div>
              </div>
              <hr>
              <div class="Interior_Features"><h3>طلب جولة</h3>
                <div class="tour">
                  <form action="{{route('send')}}" method="POST">
                    @CSRF
                    <div>
                      <label for="">الاسم</label>
                      <input type="text" name="name">
                    </div>
                    <div>
                      <label for="">رقم الهاتف</label>
                      <input type="number" name="phone">
                    </div>
                    <div>
                      <label for="">الايميل</label>
                      <input type="email" name="email">
                    </div>
                    <div>
                      <label for="">رسالة</label>
                      <input type="text" name="message" placeholder="اخبرنا باليوم الذي يناسبك">
                    </div>
                    <div>
                      <label for="">حدد وقت يناسبك</label>
                      <select name="time" name="" id="">
                        <option value="10:00 am">10:00 am</option>
                        <option value="10:30 am">10:30 am</option>
                        <option value="11:00 am">11:00 am</option>
                        <option value="11:30 am">11:30 am</option>
                        <option value="12:00 pm">12:00 pm</option>
                        <option value="12:30 pm">12:30 pm</option>
                        <option value="01:00 am">01:00 am</option>
                        <option value="01:30 am">01:30 am</option>
                        <option value="02:00 am">02:00 am</option>
                        <option value="02:30 am">02:30 am</option>
                        <option value="03:00 am">03:00 am</option>
                      </select>
                    </div>
                    <div>
                      <input name="form" type="submit" value="حجز جولة" class="submit">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end explain -->

         
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


    
</body>
</html>