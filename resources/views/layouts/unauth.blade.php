<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('partials.head')
</head>
<body>
<div id="app">
    <b-navbar toggleable="md" type="dark" variant="info">

        <b-navbar-brand href="/">Gigs</b-navbar-brand>

    </b-navbar>
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
