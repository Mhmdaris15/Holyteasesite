<?php
    use Illuminate\Support\Facades\Request;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    <link rel="shortcut icon" href="img/holytease-logo.png">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-reboot.min.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .navbar {
        @if(Request::is('/products'))
            background-color: #fe661f;
        @elseif(Request::is('/'))
            background-color: #cf578a;
        @else
            background-color: #517D40;
        @endif
        }

        @media (min-width: 992px) {
            .navbar-nav {
        @if(Request::is('/products'))
            background-color: #fe661f;
        @elseif(Request::is('/'))
            /* background-color: #fe661f; */
        @else
            background-color: #cf578a;
        @endif
        }
        }


    </style>
</head>

<body>
    @include('components.partials.navbar')
    <div class="container">
        @yield('content')
        <a href="#" id="scrollTop">
            <i class="bi bi-arrow-up">&uarr;</i>
        </a>
    </div>
    <script src="js/script.js" type="text/javascript"></script>
</body>

</html>
