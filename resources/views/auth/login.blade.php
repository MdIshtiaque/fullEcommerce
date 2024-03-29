<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ $systemLogo ? asset('admin/logo/' . $systemLogo) : asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Tinker admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Tinker Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Login - Ecommerce Admin Panal</title>
    @vite('resources/css/app.css')
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}"/>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<body class="login">
<div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
            <a href="" class="-intro-x flex items-center pt-5">
{{--                <img alt="Tinker Tailwind HTML Admin Template" style="max-width: 50%;" class="w-3/12" src="{{ $systemLogo ? asset('admin/logo/' . $systemLogo) : asset('dist/images/logo.svg') }}">--}}
            </a>
            <div class="my-auto">
                <img alt="Tinker Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                     src="{{ $systemLogo ? asset('admin/logo/' . $systemLogo) : asset('dist/images/logo.svg') }}">
                <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                    A few more clicks to
                    <br>
                    sign in to your account.
                </div>
            </div>
        </div>
        <x-auth-session-status class="mb-4" :status="session('status')"/>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
                class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                    Sign In
                </h2>
                <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your
                    account. Manage all your e-commerce accounts in one place
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" id="email"
                                      type="email" name="email" :value="old('email')" required autofocus
                                      autocomplete="username"/>
                        <x-input-error :messages="$errors->get('email')" style="color: red" class="mt-2"/>
                        <input type="password" id="password"
                                      class="intro-x login__input form-control py-3 px-4 block mt-4" type="password"
                                      name="password" required autocomplete="current-password"/>
                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>
                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input id="remember_me" name="remember" type="checkbox"
                                   class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        @endif
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <x-primary-button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login
                        </x-primary-button>
{{--                        <x-primary-button type="button" id="register" class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top" style="color:  #1a202c; background-color: #bbbbbb">--}}
{{--                            Register--}}
{{--                        </x-primary-button>--}}
                    </div>
                </form>
                <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"> By
                    signin up, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and
                        Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a>
                </div>
            </div>
        </div>
        <!-- END: Login Form -->
    </div>
</div>


<!-- BEGIN: JS Assets-->
<script src="{{ asset('dist/js/app.js') }}"></script>
{{--<script>--}}
{{--    document.querySelector('#register').onclick = function() {--}}
{{--        window.location.href = '/register';--}}
{{--    };--}}
{{--</script>--}}
<!-- END: JS Assets-->
</body>
</html>
