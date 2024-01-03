<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8">
    <link href="/assets/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Job Tracker System</title>
    <link rel="stylesheet" href="/assets/css/app.css" />
</head>
<body class="login">
    <div class="container sm:px-10 mt-5">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="/assets/images/logo.svg">
                    <span class="text-white text-lg ml-3"> Enigma </span> 
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 mt-5 rounded" src="/assets/images/jts.png">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        Job Tracker System
                        <br>
                        sign in to your account.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your apply in one place</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0 mt-5">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Login
                    </h2>
                    @if(session('msg'))
                    <p class="text-danger">{{ session('msg') }}</p>
                    @endif
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                    <form action="/login" method="POST">@csrf
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" name="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')<p class="text-danger">{{ $message }}</p>@enderror
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" name="password" placeholder="Password">
                        @error('password')<p class="text-danger">{{ $message }}</p>@enderror
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                    </div>
                    </form>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
    
    <!-- BEGIN: JS Assets-->
    <script src="/assets/js/app.js"></script>
    <!-- END: JS Assets-->
</body>
</html>