<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8">
    <link href="{{ asset('assets/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Job Tracker System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
</head>
<body class="login">
    
    {{ $slot }}

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>