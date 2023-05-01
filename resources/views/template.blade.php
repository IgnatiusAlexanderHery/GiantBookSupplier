<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/template.css')}}">

</head>
<body>
<div class="page">

    <div class="header">
        <div class="header-title">
            Giant Book Supplier
        </div>

        <div class="nav-bar">
            <a class="nav-link" href="/">Home</a>
            <div class="dropdown">
                <button class="btndropdown dropdown-toggle">Category</button>
                <div class="dropdown-content">
                    <a class="nav-link" href="/category/1">Action</a>
                    <a class="nav-link" href="/category/2">Romance</a>
                </div>
            </div>

            <a class="nav-link" href="/publisher">Publisher</a>
            <a class="nav-link" href="/contact">Contact</a>
        </div>

        @yield('content')

    </div>

    <div class="footer">
        <div class="footer-text">
            © Happy Book Store 2022
            By Ignatius Alexander Hery - 2440069514
        </div>
    </div>
</div>
</body>
</html>
