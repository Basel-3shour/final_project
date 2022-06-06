<!DOCTYPE html>
<html lang="ar">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://kit.fontawesome.com/f2178052c7.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset('dist/img/css/logo.png')}}">
    <link rel="stylesheet" href="{{asset('dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/sidebar.css')}}">



</head>
<body>
<div class="main">

    <header class="header">
        <div class="header__container">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>


            <a href="/home1" class="header__logo">دكان.كوم</a>


<div class="header__name">
    {{-- <h6>{{$user_login->name}}</h6> --}}
</div>

        </div>

    </header>
    <style>
        a, span{
            font-family: Cairo, sans-serif;
        }

    </style>
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <i class='bx bxs-disc nav__icon' ></i>
                    <span class="nav__logo-name">دكان</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items" style="text-align: center;">
                        <h3 class="nav__subtitle" style="font-family: Cairo, sans-serif;">المستخدمين</h3>
                        <div class="nav__dropdown">
                            <a href="/home1" class="nav__link">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">الرئيسية</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="{{url('/admin/profile')}}" class="nav__dropdown-item">الملف الشخصي</a>

                                </div>
                            </div>
                        </div>


                        <div class="nav__dropdown">
                            <a href="/admin/users/show" class="nav__link">
                                <i class='bx bx-user nav__icon' ></i>
                                <span class="nav__name">المستخدمين</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="{{url('/admin/users/show')}}" class="nav__dropdown-item">قائمة المستخدمين</a>

                                </div>
                            </div>
                        </div>

                        <a href="admin/massage" class="nav__link">
                            <i class='bx bx-message-rounded nav__icon' ></i>
                            <span class="nav__name">الرسائل</span>
                        </a>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">المنتجات</h3>
                        <div class="nav__dropdown">
                            <a href="{{url('/admin/products/show')}}" class="nav__link">
                                <i class='fas fa-box' ></i>
                                <span class="nav__name"> المنتجات </span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="{{url('/admin/products/show')}}" class="nav__dropdown-item">عرض المنتجات</a>
                                    <a href="{{url('/admin/product/showaddproduct')}}" class="nav__dropdown-item">اضافة منتج جديد</a>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">الاصناف</h3>
                        <div class="nav__dropdown">
                            <a href="{{url('/admin/categories/show')}}" class="nav__link">
                                <i class='fas fa-box' ></i>
                                <span class="nav__name">الاصناف</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="{{url('/admin/categories/show')}}" class="nav__dropdown-item">عرض الاصناف</a>
                                    <a href="{{url('/admin/category/showaddcategory')}}" class="nav__dropdown-item">اضافة صنف جديد</a>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <a href="{{route('logout')}}" class="nav__link nav__logout"    onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class='bx bx-log-out nav__icon' ></i>
                <span class="nav__name">تسجيل الخروج</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>
    </div>
{{-- content here--}}
@yield('content')





</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('dist/js/sidebar.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        series: [{
            name: 'series1',
            data: [31, 40, 28, 51, 42, 109, 100]
        }, {
            name: 'series2',
            data: [11, 32, 45, 32, 34, 52, 41]
        }],
        chart: {
            height: 350,
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    var options2 = {
        series: [44, 55, 41, 17, 15],
        chart: {
            type: 'donut',
        },
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();

    var options3 = {
        series: [{
            name: 'Net Profit',
            data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: 'Revenue',
            data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        }, {
            name: 'Free Cash Flow',
            data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        }],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        yaxis: {
            title: {
                text: '$ (thousands)'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return "$ " + val + " thousands"
                }
            }
        }
    };

    var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
    chart3.render();
    $(document).ready(function (){
        $(".apexcharts-toolbar").remove();
    });
</script>
</body>

</html>
