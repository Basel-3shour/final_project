<!DOCTYPE html>
<html lang="ar">
   <head>
      <meta charset="UTF-8" />
      <meta
         name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
      />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <script src="{{asset('dist/js/theme.js')}}"></script>
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css"
         integrity="sha256-DBYdrj7BxKM3slMeqBVWX2otx7x4eqoHRJCsSDJ0Nxw="
         crossorigin="anonymous"
      />
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
         crossorigin="anonymous"
      />
      <link rel="stylesheet" href="{{asset('dist/css/product.css')}}" />
      <script
         src="https://kit.fontawesome.com/f2178052c7.js"
         crossorigin="anonymous"
      ></script>
      <script src="{{asset('dist/js/themeStyle.js')}}"></script>
      <link rel="stylesheet" href="{{asset('dist/css/responsive.css')}}" />
      <title>منتج</title>
   </head>
   <body style="direction: rtl">
      <div class="header" style="direction: rtl"></div>

   @yield('main')

      <div class="footer" style="direction: rtl; margin-top: 4rem"></div>
      <script src="{{asset('dist/js/swiper-bundle.min.js')}}"></script>
      <script src="{{asset('dist/js/footer.js')}}"></script>
      <script src="{{asset('dist/js/header.js')}}"></script>

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
