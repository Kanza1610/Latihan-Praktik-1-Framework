<!doctype html>
<html lang="en" class="light-theme">
<head>
    @include('admin.layouts.head')
</head>
<body class="@yield('body-class')">
    <div class="wrapper">
        @yield('header')
        <main class="authentication-content">
            @yield('content')
        </main>
        @yield('footer')
    </div>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pace.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
