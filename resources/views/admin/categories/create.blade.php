@extends('layouts.admin')
@section('content')
<div class="container">
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
           @if (session()->has('message'))
           <div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">x</button>
               {{session()->get('message')}}
            </div>
                  @endif

    <div class="card uper">
        <div class="card-header">
            اضافة منتح
        </div>
       @if (count($errors)>0)
       @foreach ($errors->all() as $error )
       <p class="alert alert-danger">{{$error}}</p>

       @endforeach

       @endif

        <div class="card-body">

            <form method="post" action="{{url('admin/category/addcategory')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">اسم الصنف</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="form-group">
                    <label for="deails">تفاصيل الصنف</label>
                    <input type="" class="form-control" name="details" />

                </div>
                <button type="submit" class="btn btn-primary">اضافة</button>
            </form>
            <a href=""></a>
        </div>
    </div>
</div>
{{-- <script src="{{asset('js/app.js')}}" type="text/js"></script> --}}
    @endsection
