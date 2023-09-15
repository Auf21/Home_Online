    <!DOCTYPE html>
    <html lang="en" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>about</title>
        <link rel="stylesheet" href="css/all.min.css" />
        <link rel="stylesheet" href="css/framework.css" />
        <link rel="stylesheet" href="css/about.css">
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
        {{-- <div>
            <i class="fa-solid fa-right-to-bracket login"></i>
            <a href="" class="textlogin">
              الإشتراك أو التسجيل
            </a>
       </div> --}}

       <a href="{{route('home')}}" class="logo">
            <h3 class="p-relative txt-c mt-0" style="color:#dc8035">Home 
            <samp class="h1_online" >Online</samp></h3>
       </a>

     </div>
     <!-- End Head -->
     <!-- Start Top page -->
     <div class="landing">
        <div class="overlay"></div>
        <div class="text">
            <div class="contant">
                <h2>هوم أونلاين !<br>بيع وشراء العقارات</h2>
                <p>يتيح الموقع امكتنية بيع وشراء العقارات بكل سهولة ويسر</p>
            </div>
        </div>
    </div>

        <!-- start features -->
        <div class="features" >
            <div class="contener">
                <div class="feat">
                    <i class="fa-regular fa-paper-plane"></i><h3>متجاوب مع جميع الشاشات</h3>
                    <p>هذا الموقع مصمم ليكون قابل للعرض على جميع الشاشات(حاسوب مكتبي, حاسوب محمول, تابلت, هاتف محمول...الخ)</p>
                </div>
    
                <div class="feat">
                    <i class="fa-sharp fa-regular fa-star"></i><h3>السهولة في الاستخدام</h3>
                    <p>موقع الويب سهل الاستخدام والتنقل فيه، حتى بالنسبة للمستخدمين الذين ليسوا على دراية بالتكنولوجيا.</p>
                </div>
    
                <div class="feat">
                    <i class="fa-sharp fa-regular fa-handshake"></i><h3>التصميم الجذاب</h3>
                    <p>تصميم موقع الويب جذابًا وسهل القراءة، مع استخدام الألوان والخطوط المناسبة.</p>
                </div>
            </div>
        </div>
        <!-- end features -->
    
    <!-- Start serveces -->
    <div class="serveces" id="Serveses">
        <div class="contener">
            <h1 class="special-heding">الخدمات</h1>
            <p>الخدمات التي يقدمها الموقع</p>
            <div class="services-contant">
                <div class="col">
                    <!-- serves one -->
                    <div class="srv">
                        <i class="fa-regular fa-address-book"></i>
                        <div class="text">
                            <h3>استعراض العقارات</h3>
                            <p>توفير المعلومات حول العقارات، مثل المساحة والغرف والحمامات والمرافق.</p>
                        </div>
                    </div>
                     <!-- serves one -->
            
                      <!-- serves two -->
                      <div class="srv">
                        <i class="fa-regular fa-file"></i>
                        <div class="text">
                            <h3>عرض عقارات للبيع</h3>
                            <p>يتيح امكانية عرض عقارات للبيع من قبل المستخدمين </p>
                        </div>
                    </div>
                </div>
                      <!-- serves two -->
                      
                      <div class="col">
                      <!-- serves three -->
                      <div class="srv">
                        <i class="fa-solid fa-book"></i>
                        <div class="text">
                            <h3>البحث عن العقارات</h3>
                            <p>السماح للمستخدمين بالبحث عن العقارات حسب الموقع والسعر والميزات الأخرى.</p>
                        </div>
                    </div>
                      <!-- end serves three -->
                      <!-- serves fore -->
                      <div class="srv">
                        <i class="fa-solid fa-code"></i>
                        <div class="text">
                            <h3>التواصل مع أصحاب العقارات</h3>
                            <p>التواصل مع أصحاب العقارات للتفاوض على السعر وترتيب لجولة.</p>
                        </div>
                    </div>
                      <!-- end serves fore -->

                    </div>
                    <div class="col">
                        <div  class="images">
                            <img src="images/about2.jpg" alt="">
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
    <!-- end serveces -->

    <!-- start protofolio -->
    <div class="protofolio" id="Protofolio">
        <div class="contener">
            <h1 class="protofolio-heding">مطوري الموقع</h1>
            <p>لقد تم تطوير وبناء الموقع بجهد وسواعد الاصدقاء</p>
            <div class="protofolio-contant">
                <!-- <div class="card">
                    <img src="images/card1.png" alt="">
                    <div class="info">
                        <h3>project here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Reprehenderit, accusamus modi? Deleniti, labore saepe ex,
                              id ipsam sit laborum fuga ea placeat</p>
                    </div>
                </div> -->
                <div class="card">
                    <img id="hhhh" src="images/obai.jpg" alt="">
                    <div class="info">
                        <h3>محمد أُبي عبد الرزاق صبحية & وصفي محمد رفقيق عوف</h3>
                        <p>بعد عناء وجهد كبير تم بفضل الله بناء موقع الويب </p>
                    </div>
                </div>
                <!-- <div class="card">
                    <img src="images/card3.png" alt="">
                    <div class="info">
                        <h3>project here</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Reprehenderit, accusamus modi? Deleniti, labore saepe ex,
                              id ipsam sit laborum fuga ea placeat</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- end protofolio -->


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