<!doctype html>
<html lang="en" class="light-theme">
<head>
    @include('admin.layouts.head')
</head>
<body>
    <div class="wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')
        <main class="page-content">
            @yield('content')
        </main>
        @include('admin.layouts.footer')
        @include('admin.layouts.switcher')
    </div>
    @include('admin.layouts.script')
</body>
</html>
