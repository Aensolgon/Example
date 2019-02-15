@php
    use \App\Http\Middleware\LocaleMiddleware;
@endphp


<footer class="footer">
    <div class="footer-body">
        <div class="footer-body-block">
            <ul class="footer-link-body">
                <li class="footer-link">
                    <a href="{{route("portfolio")}}">@lang('messages.portfolio')</a>
                </li>
                <li class="footer-link">
                    <a href="{{route("services")}}">@lang('messages.services')</a>
                </li>
                <li class="footer-link">
                    <a href="{{route("blog")}}">@lang('messages.blog')</a>
                </li>
                <li class="footer-link">
                    <a href="{{route("contacts")}}">@lang('messages.contact')</a>
                </li>
                <li class="footer-link-bottom">
                    <a href="{{route('inSolutions')}}">@lang('messages.inSolution')</a>
                </li>
            </ul>
            
        </div>
        <div class="footer-body-block">
        <a href="{{route('home')}}"><img class="logo-fire" src="/img/3p5GIdO.gif" alt=""/></a>
        </div>
        <div class="footer-body-block footer-body-created">
            {{-- <div class="application footer-application">
                <div class="application-image footer-application-image">
                    <button>@lang('messages.addReclaim')</button>
                </div>
            </div> --}}
            
            <div class="footer-created">© 2014 - {{Carbon\Carbon::now()->format('Y')}}. mediamart.</div>
        </div>
    </div>
</footer>
