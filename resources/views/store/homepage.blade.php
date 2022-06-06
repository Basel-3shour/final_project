<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css"
            integrity="sha256-DBYdrj7BxKM3slMeqBVWX2otx7x4eqoHRJCsSDJ0Nxw="
            crossorigin="anonymous"
    />
    <!-- fonts -->
    <link
            href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&family=Montserrat:wght@100;200;300;400;500;600&display=swap"
            rel="stylesheet"
    />

    <!-- css assessts -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/css/home1.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/css/responsive.css')}}" />
    <link rel="icon" href="{{asset('dist/img/logo-main.png')}}"/>
    <title>موقع دكان</title>
</head>

<body>
<!-- start [1] navbar -->
<div class="parent">
    <div class="top-bar">
        <div class="container-fluid">
            <div class="box">
                <div class="right-box">
                    <div class="item">
                        <span>999999+</span>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="item">
                        <span>example123@gmail.com</span>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="left-box">
                    <div class="item">
                        <span>تتبع شحنتك</span>
                        <i class="fa-solid fa-truck-plane"></i>
                    </div>
                    <div class="item">
                        <span>أماكن الفروع</span>
                        <i class="fa fa-location-dot" aria-hidden="true"></i>
                    </div>
                    <div class="features">
                        <div class="item">
                            <span>العربية</span>
                            <i
                                    class="fa-solid fa-sort-down abs"
                                    aria-hidden="true"
                            ></i>
                        </div>
                        <div class="item">
                            <i
                                    class="fa-solid fa-sort-down abs"
                                    aria-hidden="true"
                            ></i>

                            <span>EGP</span>
                            <i class="fa-solid fa-coins"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light nav2">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"
            ><img src="{{asset('dist/img/logo.png')}}" alt="" />
                <span>دكان</span></a
            >
            <form class="d-flex">
                <input
                        class="form-control me-2"
                        type="search"
                        placeholder="ابحث هنا"
                        aria-label="Search"
                />
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
            <div class="nav-icon lol">

                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('تسجيل الخروج') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">التسجيل</a>
                    @endauth
                </div>
            @endif
            </div>
            @if (Route::has('login'))
            @auth

            <li class="nav-item">


                <a class="nav-link" href="/showcart">[{{$count_incart}}]<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            @endauth

            @endif
            <span><i class="fa fa-sliders" aria-hidden="true"></i></span>
              </span>
            <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
    >
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('categories')}}"
                >جميع الفئات</a
                >
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about"> عن المتجر</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contactus">تواصل معنا</a>
            </li>
        </ul>
        <div class="nav-icon">
             <span
             ><i class="fa fa-sliders" aria-hidden="true"></i
             ></span>
            <span class="shopping"
            ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
             </span>
            <a href="login.html">
                تسجيل
                <i class="fa fa-user-circle" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
    >
        <i class="fa-solid fa-bars"></i>
    </button>
        </div>

    </div>
</div>
<!-- start header[2] -->
<header class="">
    <div class="container">
    <div class="row">
        <div class="col-md-12 p-0">
            <div class="swiper-container parallax-slider" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="img-container one"></div>
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-md-12">
                                    <div class="content">
                                        <span class="offer">أقوي العروض</span>
                                        <h1 class="title">
                                            تسوق في دكان واحصل علي خصم يصل الي 30%
                                            علي جميع المنتجات
                                        </h1>

                                        <span class="start">تبدأ من</span>
                                        <p class="description">
                                            <span>ج.م</span>
                                            <span>30</span>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider controls -->
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <!-- pagination -->
                <div class="swiper-pagination pagination-ctrl"></div>
            </div>
        </div>
    </div>
    </div>
    </header>

    <!-- start categories[3] -->

    <section class="categories">
    <div class="container">

    <div class="swiper mySwiper">
        <div class="swiper-button-next">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="swiper-button-prev">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
    </div>
    </section>
    <!-- start offer[4] -->

    <section class="section-padding news">
        <div class="container">
        <div class="heading row">
            <div class="col-8">
                <div class="right">
                    <h2>
                        عروض فلاش
                        <i class="fa-solid fa-square-plus"></i>
                    </h2>
                </div>
            </div>

            <div class="col-4">
            </div>
        </div>
        <div class="news-parent">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($products as $product )

                    <div class="swiper-slide">
                        <a href="{{asset('product'.$product->id)}}">
                            <div class="first-ele">
                                <div class="image">
                                    <img src="{{asset('images/'.$product->image)}}" alt="" />
                                </div>
                                <div class="content">
                                    <div class="price">
                                        <span> {{$product->price}}</span>
                                        <span>شيكل</span>
                                    </div>
                                    <p>
                                        {{$product->details}}
                                    </p>
                                    <button>عرض المنتج</button>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
                <div class="swiper-button-next">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
        </div>
        </div>
        </section>

    {{-- <!-- start save[5] -->
    <section class="save section-padding">
    <div class="container">
    <div class="row">
        <div class="col-md-5 col-lg-4">
            <div class="right">
                <h2>قسم التوفير </h2>
                <p>
                    وفر دلوقتي ولفترة محدودة مع دكان واشتري اقوي العروض
                     بخصومات رهيبة علي جميع السلع
                </p>
            </div>
        </div>
        <div class="col-md-7 col-lg-8 save-parent">
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($categories as $category )
@
                        <div class="swiper-slide">
                            <a  href="catagoty/{{$category->id}}">
                                <div class="first-ele">
                                    </div>
                                    <div class="content">
                                        <h3>{{$category->name}}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section> --}}
    <!-- start news -->
    <section class="section-padding news">
    <div class="container">
    <div class="heading row">
        <div class="col-8">
            <div class="right">
                <h2>
                    عروض فلاش
                    <i class="fa-solid fa-square-plus"></i>
                </h2>
            </div>
        </div>
    </div>
    <div class="news-parent">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($products as $product )

                <div class="swiper-slide">
                    <a href="{{asset('product'.$product->id)}}">
                        <div class="first-ele">
                            <div class="image">
                                <img src="{{asset('images/'.$product->image)}}" alt="" />
                            </div>
                            <div class="content">
                                <div class="price">
                                    <span> {{$product->price}}</span>
                                    <span>شيكل</span>
                                </div>
                                <p>
                                    {{$product->details}}
                                </p>
                                <button>عرض المنتج</button>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
            <div class="swiper-button-next">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
    </div>
    </section>

    <!-- start contact -->
    <section class="contact section-padding">
    <div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="info">
                <div class="icon">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <div class="content">
                    <h3>تواصل معنا دلوقتي</h3>
                    <p>
                        تقدر دلوقتي ترسلنا اقتراح او شكوة عن طريق البريد
                        الالكتروني وهيتم الرد عليك بأسرع وقت ممكن
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <form action="/addfeedback" method="POST">
                @csrf
                <input
                        type="text"
                        placeholder="ادخل بريدك الالكتروني هنا"
                name="mail"/>
                 <input
                        type="text"
                        placeholder="ادخل  رسالتك هنا"
                name="massege"/>
                <input type="submit" value="أرسل الرسالة" />
            </form>
        </div>
    </div>
    </div>
    </section>


    <!-- javascript assessts -->
    <script src="{{asset('dist/js/jquery-3.0.0.min.js')}}"></script>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
    ></script>
    <script
    src="https://kit.fontawesome.com/f913381eb8.js"
    crossorigin="anonymous"
    ></script>
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"
      integrity="sha256-4sETKhh3aSyi6NRiA+qunPaTawqSMDQca/xLWu27Hg4="
      crossorigin="anonymous"
      ></script> -->

    <!-- bootstrap  libs -->
    <script src="{{asset('dist/js/swiper-bundle.min.js')}}"></script>

    <!--main-script-->
    <script src="{{asset('dist/js/main.js')}}"></script>

    <footer class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <div class="brand">
                            <img src="{{asset('dist/img/logo.png')}}" alt="" />
                            <span> دكان </span>
                        </div>
                        <p>

                             Frot-End:
                             موقع دكان للبيع و الشراء اون لاين
                             تصميم فريق طلاب كلية
                            حاسبات وذكاء اصطناعي جامعة حلوان

                            Back-End:
                            تصميم  باسل عاشور طالب في كلية فسطين التقنية
                        </p>
                        <div class="icons">
                            <span><i class="fa fa-facebook"></i></span>
                            <span><i class="fa fa-youtube"></i></span>
                            <span><i class="fa fa-instagram"></i></span>
                            <span><i class="fa fa-twitter"></i></span>
                        </div>
                    </div>
                </div>
    <div class="col-lg-3 col-md-6">

                   </div>
                   <div class="col-lg-3 col-md-6">
                      <div class="box-two">
                         <h3>الصفحات</h3>
                       <ul>
                            <li><a href="/about">عن دكان</a></li>
                            <li><a href="/contactus">تواصل معنا </a></li>
                            <li><a href="cart.html">العربة</a></li>
                         </ul>
                      </div>
                   </div>
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <h3>يمكنك التواصل مع خدمة عملائنا</h3>
                        <p>
                            يمكنك التواصل مع خدمه العملاء بأكثر من طريقة لحل مشكلتك
                            او تلقي أقتراحك
                        </p>
                        <div class="contact-us">
                            <div class="content">
                                <p>تواصل على الخط الساخن</p>
                                <p>20123456789+</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-headphones-simple"></i>
                            </div>
                        </div>
                        <a href="#">
                            <div class="download">
                                <div>
                                    <span> حمل التطبيق </span>
                                    <span>google play</span>
                                </div>
                                <div>
                                    <i class="fa-brands fa-google-play"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copy-right">
        <p>حقوق الطبع والنشر © لعام 2022 محفوظة لموقع <span>دكان</span></p>
    </div>

    <!-- javascript assessts -->
    <script src="{{asset('dist/js/jquery-3.0.0.min.js')}}"></script>

    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
    ></script>
    <script
            src="https://kit.fontawesome.com/f913381eb8.js"
            crossorigin="anonymous"
    ></script>
    <!-- <script
              src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"
              integrity="sha256-4sETKhh3aSyi6NRiA+qunPaTawqSMDQca/xLWu27Hg4="
              crossorigin="anonymous"
              ></script> -->

    <!-- bootstrap  libs -->
    <script src="{{asset('dist/js/swiper-bundle.min.js')}}"></script>

    <!--main-script-->
    <script src="{{asset('dist/js/main.js')}}"></script>
    </body>
    <html>

