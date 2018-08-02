<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_partials.meta')
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div id="app" class="relative font-sans text-base leading-normal min-h-screen text-grey-darkest bg-grey-lightest flex flex-col">
            <responsive-nav></responsive-nav>
            <div class="flex-1">
                @yield('content')
            </div>
            @include('_partials.footer')
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>