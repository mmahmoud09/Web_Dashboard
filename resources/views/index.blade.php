<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Tools/Styles/style.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css')}}" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap')}}" rel="stylesheet">
    <title>فى الخدمة</title>
    <link rel="icon" type="image/png" href="{{asset('Images/Logo (1).png')}}"/>
    <script src="{{asset('https://cdn.tailwindcss.com')}}"></script>

</head>
<body>

  <!-- Start header -->

<nav class="relative px-4 py-4 flex justify-between items-center bg-white ">
  <a class="text-xl font-bold leading-none mr-6" href="#intro">

    فى الخ<span class="text-red-500">دمة</span>
  </a>
  <div class="lg:hidden">
    <button class="navbar-burger flex items-center text-blue-600 p-3">
      <svg class="block h-8 w-8 fill-current" viewBox="0 0 20 20" xmlns="{{asset('')}}http://www.w3.org/2000/svg">
        <title>Mobile menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </button>
  </div>
  <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
    <li><a class="text-sm text-blue-600 font-bold" href="#intro">الرئيسية</a></li>
    <li class="text-gray-300">
      <svg xmlns="{{asset('http://www.w3.org/2000/svg')}}" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:text-gray-800 " href="#about">من نحن</a></li>
    <li class="text-gray-300">
      <svg xmlns="{{asset('http://www.w3.org/2000/svg')}}" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:text-gray-800" href="#services">الخدمات</a></li>
    <li class="text-gray-300">
      <svg xmlns="{{asset('http://www.w3.org/2000/svg')}}" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:text-gray-800" href="#app">التطبيق</a></li>
    <li class="text-gray-300">
      <svg xmlns="{{asset('http://www.w3.org/2000/svg')}}" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
      </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:text-gray-800" href="#contact">التواصل</a>
    </li>

      <li class="text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
          </svg>
      <li><a class="text-sm text-gray-400 hover:text-gray-800" target="_blank" href="http://127.0.0.1:8000/chat">المساعدة</a></li>
  </ul>
  <div class="w-12 ml-0 md:ml-6">
    <img src="{{asset('/Images/Logo (1).png')}}" alt="">
  </div>
</nav>
<div class="navbar-menu relative z-50 hidden">
  <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
  <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
    <div class="flex items-center mb-8">
      <a class="mr-auto text-3xl font-bold leading-none" href="#">

            <div class="w-12 ml-0 md:ml-6">
              <img src="{{asset('/Images/Logo (1).png')}}" alt="">
            </div>
      </a>
      <button class="navbar-close">
        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="{{asset('')}}http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <div>
      <ul>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#intro">الرئيسية</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#about">من نحن</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#services">الخدمات</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#app">التطبيق</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#contact">التواصل</a>
        </li>
      </ul>
    </div>
    <div class="mt-auto">
      <div class="pt-6">
      </div>
      <p class="my-4 text-xs text-center text-gray-400">
        <span>Copyright © 2024</span>
      </p>
    </div>
  </nav>
</div>

<!-- end header -->

<!-- Start intro section -->

<div id="intro">
  <div class="overlay">
    <h1>
      دائما فى الخ<span>دمة</span>
      <br>
    دائما فى الم<span>وعد</span>
    </h1>
    <p>نقدم صيانة وخدمات منزلية متنوعة لضمان افضل جودة وأكبر راحة</p>
    <button id="callButton">
      الخط الساخن :19345   <i class="fa fa-phone" aria-hidden="true"></i>
    </button>

  </div>
</div>
<!-- end intro section -->

  <!-- Start About section -->
  <div id="about">
    <h1 class="ab_head">من نحن</h1>
    <div class="p_container">
      <p>فريق عمل فى الخدمة يقدم خدمات منزلية عالية الجودة وبأسعار مناسبة لمعظم المنازل ، نقدم لكم جميع خدمات التركيب والصيانة لمستلزمات الحمامات والمطابخ من سيراميك ، أحواض ، بانيوهات ، قواعد ، خلاطات وملحقاتها. وغير ذلك فنحن نقدم لكم صيانة الأجهزة الكهربائية المنزلية بمختلف الماركات والأنواع. كل هذا باستخدام قطع غيار أصلية وفنيين مدربين حسب المواصفات الدولية ويمكنك الحصول على كل هذا لمنزلك بضمان لمدة عام ، نبحث لك عن أفضل مزود خدمة فى أقرب نطاق وموقع لك. </p>
    </div>
    <div class="about_features">
      <div><i class="fa fa-check" aria-hidden="true"></i> &nbsp; تبدأ حياتنا وتنتهي مع العميل</div>
      <div><i class="fa fa-check" aria-hidden="true"></i> &nbsp; مساعدة الآخرين وتبادل المعرفة</div>
      <div><i class="fa fa-check" aria-hidden="true"></i> &nbsp; مقدمو الخدمة لدينا هم أيضًا عملاؤنا</div>
      <div><i class="fa fa-check" aria-hidden="true"></i> &nbsp; العمل ضمن الفريق وتحقيق الأهداف معًا</div>
      <div><i class="fa fa-check" aria-hidden="true"></i> &nbsp; نشر الإيجابية والسعادة</div>
      <div><i class="fa fa-check" aria-hidden="true"></i> &nbsp; القدوم بأفكار جديدة دوما والعمل على تنفيذها</div>

    </div>
  </div>
  <!-- End about section -->

  <div class="Extra">
    <div>
      للاستفسار والاستعلام عن خدماتنا
      <br>
للحصول على خدمات أو استفسارات عنا ، يرجى الاتصال
    </div>
    <button id="callButton2">
      01118549985  &nbsp;<i class="fa fa-phone" aria-hidden="true"></i>
    </button>
  </div>


  <!-- Start services section -->
  <div id="services">
    <h1 class="ab_head">الخدمات</h1>
    <p>نختلف عن غيرنا بأن لدينا فنيين ومهندسين مدربين تدريباً عالياً ، لذلك نقدم خدماتنا بأعلى جودة وأعلى مستويات الأمان والنظافة.

    </p>
    <div class="multi_serv flex flex-row">
      <div>
        <img src="{{asset('/Images/Carpenter.png')}}" class="object-fit" alt="carpenter image">
      نجارة
      </div>

      <div>
        <img src="{{asset('/Images/condtioning.png')}}" alt="condtioning image">
        تكييف
      </div>
      <div>
        <img src="{{asset('/Images/Electricity.png')}}" alt="Electricity image">
        كهرباء
      </div>
      <div>
        <img src="{{asset('/Images/furnature.png')}}" alt="furnature image">
        أثاث منزلى
      </div>
      <div>
        <img src="{{asset('/Images/painter.png')}}" alt="painter image">
        طلاء
      </div>
      <div>
        <img src="{{asset('/Images/Plumber.png')}}" alt="Plumber image">
        سباكة
      </div>
    </div>
    <div class="serv_end">
      <div class="container">
        <div class="text">أياً ما تحتاجه ، وقتما تحتاجه</div>
      </div>
    </div>
  </div>

  <!-- End services section -->

  <!-- Start app section -->

  <div id="app">
    <p>لاستخدام التطبيق:</p>
    <div class="app_marg"><a href="{{Route('providers')}}" target="_blank">انضم لنا كمزود خدمة</a></div>
    <div><a href="">انضم لنا كمستخدم</a></div>

  </div>
  <!-- End app section -->


<!-- Start contact section -->
  <div id="contact" class="containerz">
    <h1 class="ab_head">تواصل معنا</h1>

    <div class="wrapper">

      <!-- COMPANY INFORMATION -->
      <div class="company-info">
        <h3>عن الشركة</h3>

        <ul>
          <li><i class="fa fa-road"></i> سوهاج ، ش الجمهورية</li>
          <li><i class="fa fa-phone"></i> 19345</li>
          <li><i class="fa fa-envelope"></i> nearest_services@gmail.com</li>
        </ul>
      </div>
      <!-- End .company-info -->

      <!-- CONTACT FORM -->
      <div class="contact">
        <h3>تواصل معنا</h3>

        <form id="contact-form">

          <p>
            <label>الاسم</label>
            <input type="text" name="name" id="name" required>
          </p>

          <p>
            <label>العنوان</label>
            <input type="text" name="company" id="company">
          </p>

          <p>
            <label>البريد الالكترونى</label>
            <input type="email" name="email" id="email" required>
          </p>

          <p>
            <label>رقم الهاتف</label>
            <input type="text" name="phone" id="phone">
          </p>

          <p class="full">
            <label>الرسالة</label>
            <textarea name="message" rows="5" id="message"></textarea>
          </p>

          <p class="full">
            <button type="submit">ارسال</button>
          </p>

        </form>
        <!-- End #contact-form -->
      </div>
      <!-- End .contact -->

    </div>
    <!-- End .wrapper -->
  </div>
  <!-- End .container -->
  <!-- End contact section -->


  <!-- Start footer -->

    <div class="footer">

      <div class="content">
        <div class="services">
          <h1 class="name footer_highlight">فى الخدمة</h2>

          <div class="serv_img"><img src="{{asset('/Images/Logo (1).png')}}" alt=""></div>
        </div>
        <div class="social-media">
          <h4 class="footer_highlight">تواصل</h4>
          <p>
            <a href="{{asset('https://www.linkedin.com/in/ziad-elsayed-37530724a/')}}"
              ><i class="fab fa-linkedin"></i> Linkedin</a
            >
          </p>
          <p>
            <a href="{{asset('https://twitter.com/Ziadels09567046')}}"
              ><i class="fab fa-twitter"></i> Twitter</a
            >
          </p>
          <p>
            <a href="{{asset('https://github.com/ZiadElsayedElsaman')}}"
              ><i class="fab fa-github"></i> Github</a
            >
          </p>
          <p>
            <a href="{{asset('https://www.facebook.com/ziad.alsman.33')}}"
              ><i class="fab fa-facebook"></i> Facebook</a
            >
          </p>
          <p>
            <a href="{{asset('https://www.instagram.com/ziad_elsayed_elsaman2112002/')}}"
              ><i class="fab fa-instagram"></i> Instagram</a
            >
          </p>
        </div>
        <div class="links">
          <h4 class="footer_highlight">صفحتنا</h4>
          <p><a href="#intro">الرئيسية</a></p>
          <p><a href="#about">من نحن</a></p>
          <p><a href="#services">خدماتنا</a></p>
          <p><a href="#app">التطبيق</a></p>
          <p><a href="#contact">التواصل معنا</a></p>

        </div>
        <div class="details">
          <h4 class="address footer_highlight">الشركة</h4>
          <p class="loc"><i class="fa-solid fa-location-dot"></i>سوهاج -ش الجمهورية</p>

          <h4 class="mobile">الاتصال</h4>
          <p>19345</p>
          <h4 class="mail">الايميل</h4>
          <p><i class="fa fa-envelope"></i> nearest_services@gmail.com</p>
        </div>
      </div>
      <footer>
        <hr />
        © 2024 فى الخدمة.
      </footer>
    </div>

  <!-- End footer -->


</body>

<script src="{{asset('Tools/Js/main.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

</html>
