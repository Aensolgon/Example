@php
    use \App\Http\Middleware\LocaleMiddleware;
    use \App\Http\Middleware\BreadCrumbs;


@endphp

<!--popup-->
<div class="black-window"></div>

<!-------------------->
<!--mobile menu-->
<input type="checkbox" id="hmt" class="hidden-menu-ticker">
<label class="btn-menu" for="hmt">
    <span class="first"></span>
    <span class="second"></span>
    <span class="third"></span>
</label>
<div class="header-logo-mobile">
        <a href="{{route("home")}}"><img src="/img/mediamart.svg" alt=""/></a>
    </div>
<ul class="hidden-menu">
    <li style="height:15%;display: none;">
        <div class="header-logo">
            <!--<a href="http://127.0.0.1:8000"><img src="/img/mediamart.svg" alt=""/></a>-->
        </div>
    </li>
    <li class="header-list-link link-mobile">
        <a href="{{route('portfolio')}}">@lang('messages.portfolio')</a>
    </li>
    <li id="mob-head-menu" class="header-list-link link-mobile">
        <a id="menu-button" href="{{route('services')}}">@lang('messages.services')</a>
        @if($menuHead)
            <ul class="services-list" id="menu-list">
                @foreach($menuHead as $value)
                    <li>
                        <a href="{{route('go-to-page',['url'=>$value->link])}}" class="service-list">{{$value->name}}</a>
                    </li>
                    @endforeach
                    <li>
                        <a href="{{route('digital-page')}}" class="service-list">Цифровая реклама</a>
                    </li>
                    <li>
                        <a class="service-list" href="{{route('inSolutions')}}">Отраслевые решения</a>
                    </li>

            </ul>
            @endif
    </li>
    <li class="header-list-link link-mobile">
        <a href="{{route('blog')}}">@lang('messages.blog')</a>
    </li>
    <li class="header-list-link link-mobile">
        <a href="{{route('contacts')}}">@lang('messages.contact')</a>
    </li>

    <li class="link-mobile">
        {{-- <div class="application-mobile">
            <div class="application-image">
                <button>@lang('messages.addReclaim')</button>
            </div>
        </div> --}}
    </li>
</ul>
<!--mobile menu end-->
<header class="header">
    <div class="header-body">
        <div class="header-body-content">
            <ul class="header-list">
                <li class="header-list-link desktop-menu">
                    <a href="{{route("portfolio")}}">@lang('messages.portfolio')</a>
                </li>

                <li class="header-list-link desktop-menu">
                    <a href="{{route("services")}}">@lang('messages.services')</a>
                </li>
                <li class="header-list-link desktop-menu">
                    <a href="{{route("blog")}}">@lang('messages.blog')</a>
                </li>
                <li class="header-list-link desktop-menu">
                    <a href="{{route("contacts")}}">@lang('messages.contact')</a>
                </li>
            </ul>
        </div>
        <div class="header-body-content content-header-logo">
            <div class="header-logo">
                <a href="{{route("home")}}"><img src="/img/mediamart.svg" alt=""/></a>
            </div>
        </div>
        <div class="header-body-content">
            <ul class="header-list" style="height: 25px;">
                <li class="header-list-link-lang">
                  
                <a href="{{route('setlocale', ['lang' => 'ru'])}}">Ru</a>
                        <hr class="lang-line">
                <a href= "{{route('setlocale', ['lang' => 'eng'])}}">Eng</a>
                </li>
            </ul>
        </div>
        {{--<div class="header-body-content">--}}
            {{-- <div class="application">--}}
                {{--<div class="application-image">--}}
                    {{--<button>@lang('messages.addReclaim')</button>--}}
                {{--</div>--}}
            {{--</div> --}}
        {{--</div>--}}
    </div>
    <div class="black-window"></div>

    <!-------------------->
    <!--mobile menu-->
    <input type="checkbox" id="hmt" class="hidden-menu-ticker">
    <label class="btn-menu" for="hmt">
        <span class="first"></span>
        <span class="second"></span>
        <span class="third"></span>
    </label>



</header>






