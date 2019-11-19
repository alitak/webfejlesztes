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

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-3 text-center">
            <img src="/images/globe-compass-logo.jpg" alt="logo" class="w-100" style="max-width: 300px;    max-height: 50px;">
        </div>
        <div class="col-12 col-lg-9">
            <ul class="nav float-right">
                <li class="nav-item">
                    <a class="nav-link active" href="/posts"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about"><i class="fa fa-user" aria-hidden="true"></i> About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact"><i class="fa fa-map" aria-hidden="true"></i> Contact</a>
                </li>
            </ul>
        </div>
        <div class="col text-center">
            <img src="/images/header.jpg" alt="header image" class="w-100">
        </div>
    </div>

    @yield('content')

    <div class="row">
        <div class="jumbotron w-100 m-0">
            <h1 class="display-4">copyright &copy; 2019</h1>
            <p class="lead">Simple blog</p>
            <hr class="my-4">
        </div>
    </div>
</div>
</body>
</html>
