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
{{View::make('layouts.nav')}}
@yield('content_store')
{{View::make('layouts.footer')}}

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
