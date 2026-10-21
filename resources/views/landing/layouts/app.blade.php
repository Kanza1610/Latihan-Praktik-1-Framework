<!doctype html>
<html lang="en">
    <head>
        @include('landing.layouts.head')
    </head>
    <body>
        <button class="scroll-top scroll-to-target" data-target="html" aria-label="Back to top">
            <i class="fas fa-angle-up" aria-hidden="true"></i>
        </button>

        @include('landing.layouts.header')
        @yield('content')
        @include('landing.layouts.footer')
        @include('landing.layouts.script')
    </body>
</html>
