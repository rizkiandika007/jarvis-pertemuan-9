<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard')</title>
    <!-- Custom styles for this template-->
    <link href="{{ asset('sb-admin/css/styles.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body class="sb-nav-fixed">
    <!-- Navbar -->
    @include('partials.navbar')

    <div id="layoutSidenav">
        @include('partials.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
            @include('partials.footer')
        </div>
    </div>


    <!-- Contoh navigasi -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('tasks.index') }}">Tasks</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('categories.index') }}">Categories</a>
    </li>
</ul>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb-admin/js/scripts.js') }}"></script>
</body>
</html>
