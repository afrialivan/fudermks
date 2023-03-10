<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My School</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard/main.css') }}" />
</head>

<body>

    @include('layouts.partials.dashboard.catering.sidenav')
    {{-- @include('layouts.partials.dashboard.sidenav') --}}
    <main class="main-wrapper">
        @include('layouts.partials.dashboard.header')
        @yield('container')
        @include('layouts.partials.dashboard.footer')
    </main>


    @yield('js')
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/fullcalendar.js') }}"></script>
    <script src="{{ asset('js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('js/world-merc.js') }}"></script>
    <script src="{{ asset('js/polyfill.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jsbede.js') }}"></script>
    <script src="https://kit.fontawesome.com/c404e6b6cb.js" crossorigin="anonymous"></script>
</body>

</html>
