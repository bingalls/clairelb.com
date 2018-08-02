<!DOCTYPE html>
<html lang="en">
    <head>
        @include('_partials.meta')
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        <div id="app" class="relative font-sans text-base leading-normal min-h-screen text-grey-darkest flex flex-col">
            <div class="flex-1">
                @yield('content')
            </div>
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>