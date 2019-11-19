<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light {{-- sticky-top --}}">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="/posts"><i class="fa fa-home" aria-hidden="true"></i> Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about"><i class="fa fa-user" aria-hidden="true"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact"><i class="fa fa-map" aria-hidden="true"></i> Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
{{--    <div class="row">--}}
{{--        <div class="col text-center">--}}
{{--            <img src="/images/header.jpg" alt="header image" class="w-100">--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row my-3">
        <div class="col">
            <h1>{{ ucfirst($title ?? 'Posts') }}</h1>
        </div>
    </div>
    @yield('content')
</div>

<div class="jumbotron m-0 mt-5">
    <div class="container-fluid">
        <h1 class="display-4">copyright &copy; 2019</h1>
        <p class="lead">Simple blog</p>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
