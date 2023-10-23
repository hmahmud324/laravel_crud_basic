<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand" id="main-navbar">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand text-white">LOGO</a>
        <ul class="navbar-nav mt-auto">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('blog.add')}}" class="nav-link">Add Blog</a></li>
            <li><a href="{{route('blog.manage')}}" class="nav-link">Manage Blog</a></li>
            <li class="dropdown" data-bs-toggle="dropdown">
                <a href="" class="nav-link">Portfolio</a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a href="" class="dropdown-item">Apple</a></li>
                    <li><a href="" class="dropdown-item">Samsung</a></li>
                    <li><a href="" class="dropdown-item">Orange</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
@yield('body')

<script src="{{asset('/')}}website/assets/js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}website/assets/js/all.js"></script>
<script src="{{asset('/')}}website/assets/js/custom.js"></script>
</body>
</html>
