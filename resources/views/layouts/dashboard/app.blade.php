<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.dashboard.style')

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <main>
            @include('layouts.dashboard.navbar')
            @yield('content')
        </main>
    </div>
    @include('layouts.dashboard.footer')
    @include('layouts.dashboard.script')
    @stack('script')
</body>

</html>
