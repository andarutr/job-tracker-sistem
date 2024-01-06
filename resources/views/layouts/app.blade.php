<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8">
    <link href="/assets/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>@yield('title') - Job Tracking System</title>
    @stack('styles')
    <link rel="stylesheet" href="/assets/css/app.css" />
</head>
<body class="py-5 md:py-0">
    @include('partials.mobile-menu')
    @include('partials.navbar')
    <div class="flex overflow-hidden">
        @include('partials.sidebar')

        @yield('content')
    </div>
    
    <!-- BEGIN: JS Assets-->
    <script src="/assets/js/app.js"></script>
    <!-- END: JS Assets-->
    @stack('scripts')
</body>
</html>