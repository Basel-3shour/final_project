<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <script src="{{asset('dist/js/theme.js')}}"></script>

    <link rel="stylesheet"href="{{asset('dist/css/login.css')}}">


    <script src="https://kit.fontawesome.com/04ca326e53.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('dist/js/themeStyle.js')}}"></script>
    <link rel="icon" href="{{asset('dist/img/login-main.png')}}"/>
  </head>
<body>
  <div class="container">

    @if(Session::has('message'))
    <div class="danger" role="alert">
        {{Session::get('message')}}
    </div>
@endif
@if($errors->first('name')||$errors->first('password')||$errors->first('email'))
{{'خطا في التسجيل'}}
@endif
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
            <img src="{{asset('dist/img/login-bg.png')}} " alt="">
        <div class="text">

          <span class="text-1">سجل دخولك لمتجر دكان<br> والحق الخصومات</span>
          <span class="text-2">دكان.كوم</span>
        </div>
      </div>
      <div class="back">
        <img src="{{asset('dist/img/login-bg.png')}} " alt="">
        <div class="text">
          <span class="text-1">سجل دخولك لمتجر دكان<br> والحق الخصومات</span>
          <span class="text-2">دكان.كوم</span>
        </div>

      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title" dir="rtl">تسجيل الدخول</div>

          <form action="{{url('/login')}}" method="post">


            @csrf
            <div class="input-boxes">
              <div class="input-box" >
                <i class="fas fa-envelope" ></i>
                <input type="email" placeholder="ادخل بريدك الالكتروني" required dir="rtl" name="email" id="email">
                <i class="fa-solid fa-air-conditioner"></i>

              </div>


              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="ادخل كلمه المرور" required dir="rtl" name="password" id="password">
              </div>


              <div class="text"><a href="#">هل نسيت كلمه المرور؟</a></div>
              <div class="button input-box">
                <input type="submit" value="تسجيل">
              </div>


              <div class="text sign-up-text">ليس لديك حساب؟<label for="flip">تسجيل حديد</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title" dir="rtl"> تسجيل جديد </div>


        <form action="{{url('/register')}}" method="post" >
            <span class="danger">{{$errors->first('name')}}</span>
            <br>
            <span class="danger">{{$errors->first('email')}}</span>
            <br>
            <span class="danger">{{$errors->first('password')}}</span>
            <br>
            <span class="danger">{{$errors->first('password_confirmation')}}</span>
            <br>


            @csrf
            <div class="input-boxes" >
              <div class="input-box">
                <i class="fas fa-user" ></i>
                <input type="text" placeholder="ادخل اسمك باللغه العربيه " name="name" value="{{old('name')}}" required dir="rtl">

              </div>


              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="ادخل بريدك الالكتروني" required dir="rtl" name="email" value="{{old('email')}}">

            </div>


              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="ادخل كلمه المرور" required dir="rtl" name="password" value="{{old('password')}}">

              </div>


              <div class="input-box">
                <i class="fa-solid fa-square-phone"></i>
                <input type="password" placeholder=" كلمه تاكيد" required dir="rtl"  name="password_confirmation" value="{{old('password_confirmation')}}">
              </div>


              <div class="button input-box">
                <input type="submit" value="تسجيل" >
              </div>

              <div class="text sign-up-text"> هل لديك حساب بالفعل؟<label for="flip">سجل دخولك</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>

</body>
</html>
























