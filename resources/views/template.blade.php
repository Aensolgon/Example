<!doctype html>
<html id="body" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','home')</title>
    <meta name="keywords" content = @yield('keywords') />
    <meta name="description" content = @yield('description') />
    <link rel="canonical" href = @yield('canonical') />
    <link rel="shortcut icon" href = "/favicon.ico" type="image/x-icon">


    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flickity/1.0.2/flickity.css">
    <script src="/js/swiper.js"></script>

  

    
</head>
<body id="myBody">
    @include('include.head')

    @if(Request::path() != "/" && Request::path() != "eng")
        @include('include.breadcrumbs')
    @endif
    <main>
        @if(strpos(Request::path(), 'services') !== false)
            @include('red-navbar.servicesNav')
        @endif
        @yield('content')
    </main>
    @include('include.footer')


</body>

<script src="//cdn.rawgit.com/fdaciuk/ajax/v3.0.4/dist/ajax.min.js"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{ asset('/js/common.js') }}"></script>
<script src="{{ asset('/js/custom.js') }}"></script>

</html>