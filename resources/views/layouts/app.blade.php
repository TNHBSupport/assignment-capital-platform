<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Assignment Capital Platform')</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Custom Styles -->
    @stack('styles')
</head>

<body>
    @if (request()->is('admin/*'))
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand fw-semibold" href="/">Assignment Capital</a>
                <div class="ms-auto">
                    <a class="btn btn-sm btn-outline-primary" href="https://assignmentfee.on-forge.com/">Website</a>
                </div>
            </div>
        </nav>
    @endif
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom Scripts -->
    @stack('scripts')
</body>
</html>
