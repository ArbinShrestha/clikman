<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('/assets/dist/images/fav.png')}}" rel="shortcut icon">

    <link href="https://use.typekit.net/obo3fvi.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/assets/dist/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/dist/css/main.custom.css')}}">
</head>
<body>
<div class="c-loader fixed inset-0 flex justify-center items-center" id="loader">

    <div class="loader-logo text-center">
        <div class="logo">
            <img src="{{asset('/assets/dist/images/logo.png')}}" alt="ClikMan"/>
        </div>
        <div class="counter mt-16 text-white"><span id="stat">1</span>%</div>
    </div>

</div>
<!-- c-header -->
<header class="c-header absolute z-20 left-0 right-0 top-0 ">
    <div class="navbar flex items-center w-full p-16">
        <div class="navbar-menu relative flex-1 z-50">
            <div class="navbar-trigger text-white font-bold uppercase text-sm  inline-flex items-center relative z-90">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-10">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.33333C0 0.596954 0.596954 0 1.33333 0H4C4.73638 0 5.33333 0.596954 5.33333 1.33333V4C5.33333 4.73638 4.73638 5.33333 4 5.33333H1.33333C0.596954 5.33333 0 4.73638 0 4V1.33333ZM4 1.33333H1.33333V4H4V1.33333Z" fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 8C0 7.26362 0.596954 6.66667 1.33333 6.66667H4C4.73638 6.66667 5.33333 7.26362 5.33333 8V10.6667C5.33333 11.403 4.73638 12 4 12H1.33333C0.596954 12 0 11.403 0 10.6667V8ZM4 8H1.33333V10.6667H4V8Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 1.33333C6.66667 0.596954 7.26362 0 8 0H10.6667C11.403 0 12 0.596954 12 1.33333V4C12 4.73638 11.403 5.33333 10.6667 5.33333H8C7.26362 5.33333 6.66667 4.73638 6.66667 4V1.33333ZM10.6667 1.33333H8V4H10.6667V1.33333Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 8C6.66667 7.26362 7.26362 6.66667 8 6.66667H10.6667C11.403 6.66667 12 7.26362 12 8V10.6667C12 11.403 11.403 12 10.6667 12H8C7.26362 12 6.66667 11.403 6.66667 10.6667V8ZM10.6667 8H8V10.6667H10.6667V8Z" fill="white"/>
                </svg>

                <div class="text">Menu</div>
            </div>

            <div class="navbar-dropdown fixed lg:absolute z-50 lg:z-90 bg-white top-0 bottom-0 left-0 bg-white lg:bg-transparent py-144 lg:py-0 px-32   lg:px-0  lg:top-0 lg:left-22 ">
                <ul class="menu">

                    <li class="menu-item"><a href="index.html" class="menu-link">Home</a></li>

                    <li class="menu-item"><a href="about.html" class="menu-link">About</a></li>

                    <li class="menu-item"><a href="film.html" class="menu-link">Film</a></li>

                    <li class="menu-item"><a href="frames.html" class="menu-link">Frames</a></li>

                    <li class="menu-item"><a href="services.html" class="menu-link">Services</a></li>

                    <li class="menu-item"><a href="contact.html" class="menu-link">Contact</a></li>

                    <li class="menu-item"><a href="where-to-watch.html" class="menu-link">Where to watch</a></li>

                </ul>
            </div>
        </div>
        <!-- navbar-menu -->
        <div class="navbar-logo flex justify-center flex-1">
            <a href="/"><img src="{{asset('/assets/dist/images/logo.png')}}}" alt="ClikMan"/></a>
        </div>
        <!-- navbar-logo -->
        <div class="navbar-social flex justify-end flex-1">

            <a href="https://www.facebook.com">
                <img src="{{asset('/assets/dist/images/icon-facebook.svg')}}}" alt="Facebook" class="icon-type-1"/>
                <img src="{{asset('/assets/dist/images/icon-facebook-black.svg')}}}" alt="Facebook" class="icon-type-2"/>
            </a>

            <a href="https://www.instagram.com">
                <img src="{{asset('/assets/dist/images/icon-instagram.svg')}}}" alt="instagram" class="icon-type-1"/>
                <img src="{{asset('/assets/dist/images/icon-instagram-black.svg')}}}" alt="instagram" class="icon-type-2"/>
            </a>

            <a href="https://www.google.com">
                <img src="{{asset('/assets/dist/images/icon-google.svg')}}}" alt="Google" class="icon-type-1"/>
                <img src="{{asset('/assets/dist/images/icon-google-black.svg')}}}" alt="Google" class="icon-type-2"/>
            </a>

        </div>
        <!-- navbar-social -->
        <div class="navbar-overlay fixed inset-0 "></div>
    </div>
</header>
<!-- c-header -->
<main class="js-padding-top">
    @yield('content')
</main>

    {{-- scripts--}}
    <script src="{{asset('/assets/dist/js/manifest.js')}}"></script>
    <script src="{{asset('/assets/dist/js/vendor.js')}}"></script>
    <script src="{{asset('/assets/dist/js/scripts.js')}}"></script>

   @section('scripts')
       @show
</body>
</html>
