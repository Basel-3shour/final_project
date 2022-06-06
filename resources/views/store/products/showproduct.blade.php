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
    <script src="https://kit.fontawesome.com/f2178052c7.js" crossorigin="anonymous"></script>
    <script src="{{asset('dist/js/themeStyle.js')}}"></script>
    <link rel="stylesheet" href="{{asset('dist/css/product.css')}}" />
    <title>الفئات</title>
    <link rel="icon" href="{{asset('dist/img/logo-main.png')}}"/>
    <!-- css assessts -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css" /> -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/css/home1.css')}}" />
    <link rel="stylesheet" href="{{asset('dist/css/responsive.css')}}" />
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
      <div class="header" style="direction: rtl">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<main>
    <div class="container-fluid">
       <div class="main">
          <div class="right">
             <img
                src="{{asset('images/'.$product->image)}}"
                class="pro-img"
                alt="ايفون 13 برو ماكس"
             />

             <div class="share">
                <span class="one-word">مشاركة</span>
                <a
                   href="https://www.facebook.com/"
                   target="blank"
                   class="fa fa-facebook icon"
                   style="font-size: larger"
                ></a>
                <a
                   href="https://www.youtube.com/"
                   target="blank"
                   class="fa fa-youtube-play icon"
                   style="font-size: larger"
                ></a>
                <a
                   href="https://www.twitter.com/"
                   target="blank"
                   class="fa fa-twitter icon"
                   style="font-size: larger"
                ></a>
                <a
                   href="https://www.instagram.com/"
                   target="blank"
                   class="fa fa-instagram icon"
                   style="font-size: larger"
                ></a>
             </div>
          </div>

          <div class="left">
             <div class="discreption">
                <span class="red">{{$product->name}}</span>

                <h2>
                    {{$product->name}}
                </h2>

                <span
                   class="fa fa-star checked"
                   style="margin-right: 0"
                ></span>
                <span
                   class="fa fa-star checked"
                   style="margin-right: 0.3rem"
                ></span>
                <span
                   class="fa fa-star checked"
                   style="margin-right: 0.3rem"
                ></span>
                <span
                   class="fa fa-star c"
                   style="margin-right: 0.3rem"
                ></span>
                <span
                   class="fa fa-star c"
                   style="margin-right: 0.3rem"
                ></span>
                <span style="color: gray; margin-right: 1rem">(253)</span>

                <span
                   style="
                      color: #c8c8c8;
                      margin-right: 10px;
                      margin-left: 10px;
                   "
                >
                   |
                </span>

                <i class="fa-solid fa-check" style="color: #c8c8c8"></i>
                <span style="color: #c8c8c8"> 435 بيع </span>

                <span
                   style="
                      color: #c8c8c8;
                      margin-right: 10px;
                      margin-left: 10px;
                   "
                >
                   |
                </span>

                <i class="fa-solid fa-eye" style="color: #c8c8c8"></i>
                <span style="color: #c8c8c8"> 45435 مشاهدة </span>

                <br />

                <p>
                   <span class="price"> {{$product->price}}شيكل</span>
                   <del class="dell">{{$product->price}}شيكل</del>
                </p>
                <hr />
             </div>

             <div class="about">
                <h4
                   style="
                      font-size: 20px;
                      text-align: right;
                      padding-right: 10px;
                   "
                >
                  حول هذه السلعة
                </h4>
                <ul>
                   <li>{{$product->details}}</li>

                </ul>
                <!-- end of about  -->
             </div>
             <div class="b0">
                <div class="row">
                    <form action="{{url('addtocart/'.$product->id)}}" method="POST">
                        @csrf
                        <label>الكمية</label>
                        <br>
                        <input type="number" class="form-control" value="1" min="1" name="quantity">
                        <br>
                      <button class="b2" style="width: 100%">
                         <span class="buy1"> اضف للعربة</span>
                      </button>
                    </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>

    <h3 class="suii">منتجات ذات صلة</h3>

    <section class="news">
       <div class="container">
          <div class="news-parent">
             <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                   <div class="swiper-slide">
                      <a href="#">
                         <div class="first-ele">
                            <div class="image">
                               <img src="{{asset('dist/img/monitor.png')}}" alt="" />
                            </div>
                            <div class="content">
                               <div class="price">
                                  <span> 4030 </span>
                                  <span> ج.م </span>
                               </div>
                               <p>
                                  حذاء رياضي عصري متاح بجميع الالوان للرجال
                                  - 8741
                               </p>
                               <button>أضف الي العربة</button>
                            </div>
                         </div>
                      </a>
                   </div>
                   <div class="swiper-slide">
                      <a href="#">
                         <div class="first-ele">
                            <div class="image">
                               <img src="{{asset('dist/img/tripod.png')}}" alt="" />
                            </div>
                            <div class="content">
                               <div class="price">
                                  <span> 4030 </span>
                                  <span> ج.م </span>
                               </div>
                               <p>
                                  حذاء رياضي عصري متاح بجميع الالوان للرجال
                                  - 8741
                               </p>
                               <button>أضف الي العربة</button>
                            </div>
                         </div>
                      </a>
                   </div>
                   <div class="swiper-slide">
                      <a href="#">
                         <div class="first-ele">
                            <div class="image">
                               <img src="{{asset('dist/img/radio.png')}}" alt="" />
                            </div>
                            <div class="content">
                               <div class="price">
                                  <span> 4030 </span>
                                  <span> ج.م </span>
                               </div>
                               <p>
                                  حذاء رياضي عصري متاح بجميع الالوان للرجال
                                  - 8741
                               </p>
                               <button>أضف الي العربة</button>
                            </div>
                         </div>
                      </a>
                   </div>
                   <div class="swiper-slide">
                      <a href="#">
                         <div class="first-ele">
                            <div class="image">
                               <img src="{{asset('dist/img/refrigerator.png')}}" alt="" />
                            </div>
                            <div class="content">
                               <div class="price">
                                  <span> 4030.3355 </span>
                                  <span> ج.م </span>
                               </div>
                               <p>
                                  حذاء رياضي عصري متاح بجميع الالوان للرجال
                                  - 8741
                               </p>
                               <button>أضف الي العربة</button>
                            </div>
                         </div>
                      </a>
                   </div>
                   <div class="swiper-slide">
                      <a href="#">
                         <div class="first-ele">
                            <div class="image">
                               <img src="{{asset('dist/img/scanner1.png')}}" alt="" />
                            </div>
                            <div class="content">
                               <div class="price">
                                  <span> 4030 </span>
                                  <span> ج.م </span>
                               </div>
                               <p>
                                  حذاء رياضي عصري متاح بجميع الالوان للرجال
                                  - 8741
                               </p>
                               <button>أضف الي العربة</button>
                            </div>
                         </div>
                      </a>
                   </div>

                   <div class="swiper-slide">
                      <a href="#">
                         <div class="first-ele">
                            <div class="image">
                               <img src="{{asset('dist/img/camera.png')}}" alt="" />
                            </div>
                            <div class="content">
                               <div class="price">
                                  <span> 4030 </span>
                                  <span> ج.م </span>
                               </div>
                               <p>
                                  حذاء رياضي عصري متاح بجميع الالوان للرجال
                                  - 8741
                               </p>
                               <button>أضف الي العربة</button>
                            </div>
                         </div>
                      </a>
                   </div>

                   <div class="swiper-slide">
                      <a href="#">
                         <div class="first-ele">
                            <div class="image">
                               <img src="{{asset('dist/img/tripod2.png')}}" alt="" />
                            </div>
                            <div class="content">
                               <div class="price">
                                  <span> 4030 </span>
                                  <span> ج.م </span>
                               </div>
                               <p>
                                  حذاء رياضي عصري متاح بجميع الالوان للرجال
                                  - 8741
                               </p>
                               <button>أضف الي العربة</button>
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
    </section>
 </main>
 </div>
 <div class="footer" style="direction: rtl; margin-top: 4rem"></div>
 <script src="{{asset('dist/js/swiper-bundle.min.js')}}"></script>
 <script src="{{asset('dist/js/footer.js')}}"></script>

 <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
 ></script>
 <script>

    const display = document.getElementById("display");

    function counter_add() {
       const number = display.innerText;
       if (number < 10) {
          display.innerText = parseInt(number, 10) + 1;
       } else {
          alert("انت معاك فلوسهم!!!");
       }
    }

    function counter_minus() {
       const number = display.innerText;
       if (number > 1) {
          display.innerText = parseInt(number, 10) - 1;
       } else {
          alert("احنا هنهزر في حاجة بالسالب");
       }
    }

    var swiper = new Swiper(".news .mySwiper", {
       slidesPerView: 4,
       autoplay: {
          delay: 4000,
       },
       spaceBetween: 30,
       keyboard: {
          enabled: true,
       },
       pagination: {
          el: ".swiper-pagination",
          clickable: true,
       },
       navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
       },
       breakpoints: {
          1200: {
             slidesPerView: 4,
          },

          992: {
             slidesPerView: 3,
          },
          575: {
             slidesPerView: 2,
          },
          0: {
             slidesPerView: 1,
          },
       },
    });
 </script>

 <!--main-script-->
 <script src="{{asset('dist/js/main.js')}}"></script>
</body>
</html>
