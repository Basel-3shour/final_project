@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h3>الأصناف</h3>
      </div>
  </div>

  <table class="table table-bordered">
      <tr>
          <th>ID</th>
          <th>الصنف</th>
          <th>التفاصيل</th>
          <th>#</th>
          {{-- <th width="280px">Actions</th> --}}
      </tr>
      @foreach ($all_categories as $category)
      <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->name}}</td>
          <td>{{$category->description}}</td>
          <td>
              <a class="btn btn-info" href="edit/{{$category->id}}">تعديل</a>

              <a class="btn btn-danger" href="delete/{{$category->id}}">حذف</a>
          </td>
      </tr>
      @endforeach
  </table>
</div>
  @endsection
