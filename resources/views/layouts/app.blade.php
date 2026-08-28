<!DOCTYPE html>
<html lang="en" class="light" ng-app="jobTrackerApp">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dashboard' }} - Job Tracking System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
    <style>[ng-cloak], .ng-cloak { display: none !important; }</style>
</head>
<body class="py-5 md:py-0">
    @include('partials.mobile')
    @include('partials.navbar')
    <div class="flex overflow-hidden">
        @include('partials.sidebar')

        @yield('content')
    </div>

    <!-- BEGIN: JS Assets-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/angular-app.js') }}"></script>
    @stack('scripts')
</body>
</html>