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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    @include('components.partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>