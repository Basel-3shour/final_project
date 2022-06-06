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

            <form method="post" action="{{url('admin/product/addproduct')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">اسم المنتج</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="form-group">
                    <label for="deails">تفاصيل المنتج</label>
                    <input type="" class="form-control" name="details" />
                    {{-- <textarea name="deails"  placeholder="اكتب تفاصل المنتج....... "></textarea> --}}

                </div>
                <div class="form-group">
                    <label for="name">تصنيف المنتج</label>
                    <br>
                 <select name="categorie_id" id="select">
                     @foreach ($categories as $category )


                   <option value="{{$category->id}}">{{$category->name}}</option>
                   @endforeach
                     </select>
                </div>
                <div class="form-group">
                    <label for="price">السعر</label>
                    <input type="text" class="form-control" name="price" />
                </div>
                <div class="form-group">
                    <label for="quantity">الكمية</label>
                    <input type="text" class="form-control" name="quantity"/>
                </div>
                <div class="form-group">
                    <label for="image">صورة المنتج</label>
                    <input type="file" class="form-control" name="image" />
                </div>
                <button type="submit" class="btn btn-primary">اضافة</button>
            </form>
            <a href=""></a>
        </div>
    </div>
</div>
{{-- <script src="{{asset('js/app.js')}}" type="text/js"></script> --}}
    @endsection
