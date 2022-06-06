@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h3>المنتجات</h3>
      </div>
  </div>

  <table class="table table-bordered">
      <tr>
          <th>ID</th>
          <th>الاسم</th>
          <th>السعر</th>
          <th>التفاصيل</th>
          <th>الصورة</th>
          <th>#</th>
          {{-- <th width="280px">Actions</th> --}}
      </tr>
      @foreach ($all_products as $product)
      <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->details}}</td>
          <td><img height="70px" width="70px" src="{{asset('images/'.$product->image)}}"></td>
          <td>
              <a class="btn btn-info" href="edit/{{$product->id}}">تعديل</a>

              <a class="btn btn-danger" href="delete/{{$product->id}}">حذف</a>
          </td>
      </tr>
      @endforeach
  </table>
</div>
  @endsection
