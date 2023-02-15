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
<<<<<<< HEAD
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap-reboot.min.css">
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
=======

    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

>>>>>>> 8b9604006f270f14b8794cda478172bd193682cd
    <style>
        .navbar {
            @if(Request::is('/products')) background-color: #fe661f;
            @elseif(Request::is('/')) background-color: #cf578a;
            @else background-color: #517D40;
            @endif
        }

        @media (min-width: 992px) {
            .navbar-nav {
                @if(Request::is('/products')) background-color: #fe661f;
                @elseif(Request::is('/'))
                /* background-color: #fe661f; */
                @else background-color: #cf578a;
                @endif
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</head>

<body>
    @include('components.partials.navbar')
    <div class="container">
        @yield('content')
        <a href="#" id="scrollTop">
            <i class="bi bi-arrow-up">&uarr;</i>
        </a>
    </div>
    {{-- <script src="{{ asset('bootstrap-5.0.2-dist/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.0.2-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
</body>

</html>