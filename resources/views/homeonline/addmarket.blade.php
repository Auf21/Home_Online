<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddLand</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/AddProduct.css">
    <!-- for landing -->
    <link rel="stylesheet" href="css/addmarket.css">
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
        <div>
            <i class="fa-solid fa-right-to-bracket login"></i>
            {{-- <a href="" class="textlogin">
               تسجيل الخروج
            </a> --}}
       </div>

       <a href="{{route('home')}}" class="logo">
            <h3 class="p-relative txt-c mt-0" style="color:#dc8035">Home 
            <samp class="h1_online" >Online</samp></h3>
       </a>

      {{--  <div class="search p-relative">
           <input class="p-10" type="search" placeholder="Type A Keyword" />
        </div> --}}
     </div>
     <!-- End Head -->

     <!-- Start Top page -->
     <div class="landing1">
        <div class="overlay"></div>
        <div class="text">
            <div class="contant">
                <h2>هوم أونلاين !<br>نحن نساعدك على محلك بسرعة اكبر.</h2>
                <p> كل ما عليك فعله هو إدخال المعلومات الاساسية للمنزل الذي تريد بيعه بالإضافة الى بعض الصور </p>
            </div>
        </div>
    </div>
     <!-- End Top page -->
     <!-- start infonmation -->
     <div class="contant">
        <div class="contener">
            <div class="address">
                <h3>للبيع من قبل المالك </h3>
                <p>أدخل عنوان المحل:</p>
                      <form action="{{route('storeaddmarket')}}" method="post" enctype="multipart/form-data">
                        @CSRF
                        <label for=""></label>
                        <div>
                          <input name="addres" type="text" required class="edit" placeholder="اسم المدينة - اسم الحي - اسم الشارع">
                        </div>
                        <label for="">نوع العقار</label>
                        <select name="type" class="edit" id="">
                            <option value="محل">محل</option>
                        </select>
                        <div><br>
                          <label for="">شرح اضافي عن موقع العقار:</label>
                          <input  name="disc" type="text" class="edit" required placeholder="مثال: بجانب مشفى الرازي ">
                        </div>
                        <hr>
                        <div class="price">
                            <h3>حدد السعر الخاص بك </h3>
                            <label for="">أدخل السعر:</label>
                            <input name="price" type="number" class="edit" required placeholder="ل.س">
                        </div>
                        <hr>
                        <div class="image">
                            <h3>الصور</h3>
                            <label for="">أدخل الصور:</label>
                            <input type="file" name="images[]" multiple required>
                        </div>
                        <hr>
                        <div class="">
                            <h3>معلومات العقار</h3>
                              <label for="">أدخل المساحة:</label>
                              <input name="area" type="number" class="edit" required placeholder="متر مربع">
                        </div>
                        <hr>
                        <div class="price">
                            <h3>معلومات إضافية</h3>
                            <label for="">التكييف</label>
                            <select name="condition" class="edit" id="">
                                <option value="لا يوجد">لا يوجد</option>
                                <option value="ساخن فقط">ساخن فقط</option>
                                <option value="بارد فقط">بارد فقط</option>
                                <option value="بارد وساخن">بارد وساخن</option>
                            </select>
                            <br><br>
                            <label for="">الاكساء</label>
                            <select name="cladding" name="" class="edit" id="">
                              <option value="غير مفروش">غير مفروش</option>
                              <option value="ديلوكس">ديلوكس</option>
                              <option value="سوبر ديلوكس">سوبر ديلوكس</option>
                            </select>
                            <br><br>
                        </div>
                        <div>
                         
                           <input name="argement" type="checkbox" class="checkbox" required><label for="">إخلاء مسؤولية: 
                            أوافق وأقر وأفهم ما يلي:
                             (1) أنا (أو لدي سلطة التصرف نيابةً عن) مالك هذا المنزل, (2) لن أقدم معلومات غير صحيحة
                              ,(3) سأقوم بنشر الممتلكات الخاصة بي "للبيع من قبل المالك",
                               وأنني سأكون المسؤول الوحيد عن صيانة وتحديث النشر والرد على العروض المحتملة والتفاوض بشأنها لشراء العقار.
                           </label>
                        </div>
                        <div>
                          <input name="save-post" type="submit" value="نشر العرض" class="submit edit">
                        </div>
                      </form>
                    </div>
            </div>
        </div>
     </div>
     <!-- end infonmation -->
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
</body>
</html>