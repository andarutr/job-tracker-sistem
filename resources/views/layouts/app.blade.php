<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8">
    <link href="/assets/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Enigma admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Enigma Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Enigma - Tailwind HTML Admin Template</title>
    <link rel="stylesheet" href="/assets/css/app.css" />
</head>
<body class="py-5 md:py-0">
    @include('partials.mobile-menu')
    @include('partials.navbar')
    <div class="flex overflow-hidden">
        @include('partials.sidebar')

        @yield('content')
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="side-menu-dark-dashboard-overview-4.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
        <div class="dark-mode-switcher__toggle border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->
    
    <!-- BEGIN: JS Assets-->
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
    <script src="/assets/js/app.js"></script>
    <!-- END: JS Assets-->
</body>
</html>