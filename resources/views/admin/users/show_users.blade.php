@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h3>المستخدمين</h3>
      </div>
  </div>

  <table class="table table-bordered">
      <tr>
          <th>ID</th>
          <th>الاسم</th>
          <th>البريد</th>
          <th>#</th>
          {{-- <th width="280px">Actions</th> --}}
      </tr>
      @foreach ($all_users as $user)
      <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          {{-- <td>{{$user->quantity}}</td> --}}
          <td>
              <a class="btn btn-info" href="edit/{{$user->id}}">تعديل</a>

              <a class="btn btn-danger" href="delete/{{$user->id}}">حذف</a>
          </td>
      </tr>
      @endforeach
  </table>
</div>
  @endsection
