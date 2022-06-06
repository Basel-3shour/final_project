@extends('layouts.admin')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('dist/js/theme.js')}}"></script>
    <link rel="stylesheet" href="{{asset('dist/css/profile.css')}}">
    <script src="https://kit.fontawesome.com/f2178052c7.js" crossorigin="anonymous"></script>
    <script src="{{asset('dist/js/themeStyle.js')}}"></script>
    <title>حسابي</title>

  </head>
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <main>
        <div class="main">
          <div class="rightsec">

    @if(Session::has('message'))
    <div class="danger" role="alert">
        {{Session::get('message')}}
    </div>
@endif
@if($errors->first('name')||$errors->first('email')||$errors->first('image'))
<h3>{{'خطا في التعديل'}}</h3>
@endif
@if (count($errors)>0)
@foreach ($errors->all() as $error )
<p class="alert alert-danger">{{$error}}</p>

@endforeach

@endif
<br>
            <form method="post" action="/admin/update/profile/{{$admin_log->id}}" enctype="multipart/form-data">
                @csrf
              <div class="profile">
                <span class="set">تعديل البروفايل</span>
                <hr>
                <div>
                  <input class="p_input" type="text" value="{{$admin_log->name}}" name="name">
                  <label ><i class="fa-solid fa-user fa-solid1"></i></label>
                </div>
                <div>
                  <input class="p_input" type="email" value="{{$admin_log->email}}" name="email">
                  <label><i class="fa-solid fa-envelope fa-solid1"></i></label>
                </div>
              </div>
              <div class="profile">
                <span class="set">تعديل العنوان وبيانات التواصل</span>
                <hr>
                <div>
                  <input class="p_input" type="text" value="{{$admin_log->address}}" placeholder="العنوان" name="address">
                  <label><i class="fa-solid fa-map fa-solid1"></i></label>
                  <input class="p_input" type="tel" value="{{$admin_log->phone_number}}" placeholder="رقم الجوال" name="phone_number">
                  <label><i class="fa-solid fa-phone fa-solid1"></i></label>
                  <input class="p_input" type="text" value="{{$admin_log->city}}" placeholder="المدينة" name="city">
                  <label><i class="fa-solid fa-map fa-solid1"></i></label>
                </div>
              </div>
              {{-- <div class="profile">
                <span class="set">تعديل كلمة المرور</span>
                <hr>
                <input class="p_input" type="password" name="password" placeholder="كلمة السر الجديدة">
                <label ><i class="fa-solid fa-lock-open fa-solid1"></i></label>
              </div> --}}
              <div class="profile">
                <span class="set">اضافة صور للبروفايل</span>
                <hr>
                <div>
                  <input class="p_input" type="file" name="image" value="{{$admin_log->name}}">
                  <label><i class="fa-solid fa-envelope fa-solid1"></i></label>
                </div>
              </div>
              <button type="submit" class="btn">حفظ التعديلات</button>
            </form>
          </div>
          <div class="leftsec">
            <div class="conter">
              <div class="card">
                <div class="card-img">
                  <img id="user_bg" src="{{asset('dist/img/Layer_bg.png')}}"alt="">
                </div>
                <div class="profile-img">
                  <img src="{{asset('images/'.$admin_log->image)}}" alt="" width="270px">
                </div>
                <div class="card-content">
                  <p class="uname">{{$admin_log->name}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</div>

@endsection
