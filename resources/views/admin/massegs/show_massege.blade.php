@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h3>الشكاوي والمراجعات</h3>
      </div>
  </div>

  <table class="table table-bordered">
      <tr>
          <th>الاميل</th>
          <th>الرسالة</th>
          <th>#</th>
          {{-- <th width="280px">Actions</th> --}}
      </tr>
      @foreach ($all_messages as $message)
      <tr>
          <td>{{$message->email}}</td>
          <td>{{$message->massege}}</td>
      </tr>
      @endforeach
  </table>
</div>
  @endsection
