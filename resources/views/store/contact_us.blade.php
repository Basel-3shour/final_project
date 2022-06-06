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
    <script src="{{asset('dist/js/theme.js')}}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dist/css/categories.css')}}">
    <script src="https://kit.fontawesome.com/f2178052c7.js" crossorigin="anonymous"></script>
    <script src="{{asset('dist/js/themeStyle.js')}}"></script>
    <link rel="stylesheet" href="{{asset('dist/css/product.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/css/contact.css')}}">

    <title>تواصل معنا</title>
    <link rel="icon" href="{{asset('dist/img/logo-main.png')}}"/>
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
                        <span>20123456789+</span>
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


                <a class="nav-link" href="showcart">[{{$count_incart}}]<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
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
                <a class="nav-link" href="/about">عن المتجر</a>
            </li>
        </ul>
        <div class="nav-icon">
             <span
             ><i class="fa fa-sliders" aria-hidden="true"></i
             ></span>
            <span class="shopping"
            ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
             </span>
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
<br>
<br><br><br><br><br><br><br><br>
<main>
    <div class="container1">
        <div class="content">


            <div class="right-side">

                <div class="topic-text"style="text-align:right;margin-bottom: 1rem; margin-top: 3rem;">تواصل معانا </div>
                <p style="text-align:right; font-size:1rem;margin-bottom: 1rem;">تقدر دلوقتي ترسلنا اقتراح او شكوه عن طريق البريد الالكتروني وهيتم الرد علي رسالتك باسرع ما يمكن</p>

                <form action="/addfeedback"method="POST">
                    @csrf
                    <div class="input-box">
                        <input id="u_name" type="text" placeholder="  ادخل اسمك بالكامل (باللغه العربيه)"required dir="rtl"name="user">
                    </div>
                    <div class="input-box">
                        <input id="u_mail" type="text" placeholder="ادخل بريدك الالكتروني "required dir="rtl"name="mail">
                    </div>

                    <div class="input-box">
                        <input id="u_mail" type="text" placeholder="ادخل رسالتك  "required dir="rtl"name="massege">
                    </div>



                    <div class="input-box message-box">

                    </div>

                        <input type="submit" value="ارسال الرساله"  >
                    </div>
                </form>
            </div>
        </div>
    </div>



</main>

<script>
    function checkFun(){
        var u_name=document.getElementById("u_name").value;
        var u_mail=document.getElementById("u_mail").value;
        var u_pass=document.getElementById("u_pass").value;
        if ( u_name=="" &&  u_name=="" && u_pass== ""){
            alert("ادخل اسمك بالكامل وادخل البريد الالكتروني وادخل الرساله")
        }
        else if( u_name==""){
            alert("ادخل اسمك بالكامل ");
        }
        else if( u_mail==""){
            alert(" ادخل البريد الالكتروني");
        }
        else if(u_pass== ""){
            alert("   ادخل الرساله  ");
        }
        else{
            alert("تم ارسال الرساله بنجاح");
            location.reload();

        }

    }

</script>
