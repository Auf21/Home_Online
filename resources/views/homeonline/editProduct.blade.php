<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AddProduct</title>
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/framework.css')}}" />
  <link rel="stylesheet" href="{{asset('css/AddProduct.css')}}">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&#038;display=swap" rel="stylesheet" />
  <!-- Arabic font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amiri:ital@1&family=Cairo:wght@200;300;700;800&display=swap"
    rel="stylesheet">
</head>

<body>
  <!-- Start Head -->
  <div class="head bg-white p-15 between-flex">
   {{--  <div>
      <i class="fa-solid fa-right-to-bracket login"></i>
      <a href="" class="textlogin">
        الإشتراك أو التسجيل
      </a>
    </div> --}}

    <a href="courses.html" class="logo">
      <h3 class="p-relative txt-c mt-0" style="color:#dc8035">Home
        <samp class="h1_online">Online</samp>
      </h3>
    </a>

    <div class="search p-relative">
      <input class="p-10" type="search" placeholder="ابحث عن شيئ" />
    </div>
  </div>
  <!-- End Head -->

  <!-- Start Top page -->
  <div class="landing">
    <div class="overlay"></div>
    <div class="text">
      <div class="contant">
        <h2>هوم أونلاين !<br>نحن نساعدك على بيع منزلك بسرعة اكبر.</h2>
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
        <p>أدخل عنوان المنزل:</p>
        <form action="{{route('edit_product',$home->id)}}" method="post" enctype="multipart/form-data">
          @CSRF
          <label for=""></label>
          <div>
            <input name="addres" type="text"  class="edit" value="{{$home->address}}" placeholder="اسم المدينة - اسم الحي - اسم الشارع">
          </div>
          <div>
            <label for="">شرح اضافي عن موقع المنزل:</label>
            <input name="disc" type="text" value="{{$home->info_position}}" class="edit"  placeholder="مثال: بجانب مشفى الرازي ">
          </div>
          <hr>
          <div class="price">
            <h3>حدد السعر الخاص بك </h3>
            <label for="">أدخل السعر:</label>
            <input name="price" type="number" value="{{$home->price}}" class="edit"  placeholder="ل.س">
          </div>
          <hr>
          <div class="image">
            <h3>الصور</h3>
            <label for="">أدخل الصور:</label>
            <input  type="file" name="images" multiple value="">
          </div>
          <hr>
          <div class="">
            <h3>معلومات المنزل</h3>
            <label for="">أدخل عدد الغرف الإجمالي:</label>
            <select name="no_room" class="edit" id="">
              <option value="{{$home->room_no}}">{{$home->room_no}}</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
            </select>
            <br><br>
            <label for="">أدخل عدد غرف النوم:</label>
            <select name="no_bedroom" class="edit" id="">
              <option value="{{$home->bathroom_no}}">{{$home->bathroom_no}}</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
            </select>
            <br><br>
            <label for="">أدخل المساحة:</label>
            <input name="area" value="{{$home->area}}" type="number" class="edit"  placeholder="متر مربع">
          </div>
          <hr>
          <div class="price">
            <h3>معلومات إضافية</h3>
            <label for="">التكييف</label>
            <select  name="condition" class="edit" id="">
              <option value="{{$home->condition}}" >{{$home->condition}}</option>
              <option value="لا يوجد">لا يوجد</option>
              <option value="ساخن فقط">ساخن فقط</option>
              <option value="بارد فقط">بارد فقط</option>
              <option value="بارد وساخن">بارد وساخن</option>
            </select>
            <br><br>
            <label for="">فسحة خارجية</label>
            <select name="expence" class="edit" id="">
              <option value="{{$home->expanse}} ">{{$home->expanse}}</option>
              <option value="لا يوجد">لا يوجد</option>
              <option value="حديقة صغيرة">حديقة صغيرة</option>
              <option value="ساحة كبيرة">ساحة كبيرة</option>
            </select>
            <br><br>
            <label for="">الطابق</label>
            <input name="floor" value="{{$home->floor}}"type="text" class="edit"  placeholder="مثال: الرابع">
            <br><br>
            <label for="">الإكساء</label>
            <select name="cladding" name="" class="edit" id="">
              <option value="{{$home->cladding}} "> {{$home->cladding}}</option>
              <option value="غير مفروش">غير مفروش</option>
              <option value="ديلوكس">ديلوكس</option>
              <option value="سوبر ديلوكس">سوبر ديلوكس</option>
            </select>
            <br><br>
            <label for="">عدد الحمامات</label>
            <select name="no_bathroom" class="edit" id="">
              <option selected value="{{$home->bathroom_no}}">{{$home->bathroom_no}}</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <br><br>
            <label for="">موقف سيارات</label>
            <select name="carage" class="edit" id="">
              <option value="{{$home->carage}} ">{{$home->carage}}</option>
              <option value="لا يوجد">لا يوجد</option>
              <option value="يوجد كراج">يوجد كراج</option>
              <option value="فسحة امامية">فسحة امامية</option>
            </select>
            <br><br>
           
            <label for="">نوع العقار</label>
            <select name="type" class="edit" id="">
              <option value="منزل">{{$home->condition}}</option>
              <option value="منزل">منزل</option>
              <option value="شقة">شقة</option>
              <option value="فيلا">فيلا</option>
              <option value="شاليه">شاليه</option>
              <option value="أرض">أرض</option>
              <option value="محل">محل</option>
            </select>
          </div>
          <div>

            <input name="argement" value="argement" type="checkbox" class="checkbox" required><label for="">إخلاء مسؤولية:
              أوافق وأقر وأفهم ما يلي:
              (1) أنا (أو لدي سلطة التصرف نيابةً عن) مالك هذا المنزل, (2) لن أقدم معلومات غير صحيحة
              ,(3) سأقوم بنشر الممتلكات الخاصة بي "للبيع من قبل المالك",
              وأنني سأكون المسؤول الوحيد عن صيانة وتحديث النشر والرد على العروض المحتملة والتفاوض بشأنها لشراء العقار.
            </label>
          </div>
          <div>
            <input name="save-post" type="submit" value=" حفظ التعديلات" class="submit edit">

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
        <samp class="h1_online">Online</samp>
      </h3>
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