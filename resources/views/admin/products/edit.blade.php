@extends('layouts.admin')
@section('content')
<div class="container">
    <!-- Display Validation Errors -->
    <!-- New Task Form -->
    @if (count($errors)>0)
    @foreach ($errors->all() as $error )
    <p class="alert alert-danger">{{$error}}</p>

    @endforeach

    @endif
    <form action="{{url('admin/products/update/'.$product->id)}}" method="POST" class="form-horizontal">
           @csrf
        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">تعديل الاسم</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control" value="{{$product->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">تعديل السعر</label>

            <div class="col-sm-6">
                <input type="text" name="price" id="task-name" class="form-control" value="{{$product->price}}">
            </div>
        </div>
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">تعديل التفاصيل</label>

            <div class="col-sm-6">
                <input type="text" name="detalies" id="task-name" class="form-control" value="{{$product->details}}">
            </div>
        </div>

        <!-- Add Task Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-btn fa-refresh"></i>تحديث
                </button>
            </div>
        </div>
    </form>
</div>
@endsection


