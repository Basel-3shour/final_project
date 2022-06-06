<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>edite</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
@section('content')
<div class="panel-body">

    <form action="{{url('admin/users/update/'.$user->id)}}" method="POST" class="form-horizontal">
           @csrf
        <!-- Task Name -->
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">الاسم</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control" value="{{$user->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">البريد</label>

            <div class="col-sm-6">
                <input type="text" name="price" id="task-name" class="form-control" value="{{$user->email}}">
            </div>
        </div>
        <div class="form-group">
            <label for="task-name" class="col-sm-3 control-label">رقم الهاتف</label>

            <div class="col-sm-6">
                <input type="text" name="quantity" id="task-name" class="form-control" value="{{$user->name}}">
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
</body>
</html>

