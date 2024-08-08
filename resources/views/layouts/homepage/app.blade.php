<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include("layouts.homepage.style")
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <main>
                @include('layouts.homepage.navbar')
                @yield("content")
            </main>
        </div>
        @include('layouts.homepage.footer')
        @include("layouts.homepage.script")
        @yield("script")
    </body>
</html>