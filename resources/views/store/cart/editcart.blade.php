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
    <title>الفئات</title>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="container">
    <!-- Display Validation Errors -->
    <!-- New Task Form -->
    @if (count($errors)>0)
    @foreach ($errors->all() as $error )
    <p class="alert alert-danger">{{$error}}</p>

    @endforeach

    @endif
    <form action="{{url('showcart/update/'.$cart->id)}}" method="POST" class="form-horizontal">
           @csrf
        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">تعديل الكمية</label>

            <div class="col-sm-6">
                <input type="text" name="quantity" id="task-name" class="form-control" value="{{$cart->quantity}}">
            </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-btn fa-refresh"></i>تحديث
                </button>
            </div>
        </div>
    </form>
</div>
