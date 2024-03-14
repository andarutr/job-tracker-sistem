<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? '' }}- Job Tracking System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
</head>
<body class="py-5 md:py-0">
    <livewire:partials.mobile />
    <livewire:partials.navbar />
    <div class="flex overflow-hidden">
        <livewire:partials.sidebar />

        {{ $slot }}
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>