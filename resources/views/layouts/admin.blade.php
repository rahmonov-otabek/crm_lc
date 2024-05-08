<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin - @yield('title')</title>
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
   
    @yield('css')
</head>

<body>

    <div class="main-wrapper">

        @include('admin.includes.header')  
        @include('admin.includes.sidebar') 

        <div class="page-wrapper">
            <div class="content container-fluid">
                
                @yield('content')

            </div> 
        </div>
    </div>
  
    @yield('js') 
</body>

</html>