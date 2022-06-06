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
            <li class="nav-item">
                <a class="nav-link" href="search.html">[{{$count_incart}}]<i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
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
                <a class="nav-link" href="search.html"> الموضة</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html">السوبر ماركت</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html">العطور</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html">موبايلات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html">الالكترونيات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html">الاجهزة المنزلية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html">العاب الكترونية</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search.html">عروض اليوم</a>
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
