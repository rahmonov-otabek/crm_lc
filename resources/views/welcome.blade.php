<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Home</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"> 

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">
</head>

<body> 
<div class="container">
    <div class="p-4" style="text-align: center"> 
        <h1>Tizimga qaysi yo'l orqali kirmoxchisiz?</h1>
    </div>
    <div class="row">
        <div class="col-1"> 
        </div>
        <div class="col-3">
            <a href="{{ route('admin-show-login') }}" class="btn btn-block btn-outline-danger p-4" style="font-size: 25px;">
                Admin
            </a> 
        </div>
        <div class="col-3">
            <a href="{{ route('teacher-show-login') }}" class="btn btn-block btn-outline-success p-4" style="font-size: 25px;">
                Ustoz
            </a>  
        </div>
        <div class="col-3">
            <a href="{{ route('student-show-login') }}" class="btn btn-block btn-outline-info p-4" style="font-size: 25px;">
                O'quvchi
            </a>  
        </div> 
        <div class="col-1"> 
        </div>
    </div> 
</div>  
</body> 
</html>
