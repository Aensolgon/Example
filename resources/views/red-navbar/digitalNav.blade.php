@php
   use \App\Http\Middleware\BreadCrumbs;
@endphp

<div class="header-links-bottom-wrapper">
    <div class="header-links-bottom-body">
        <div class="header-links-bottom-block">
            <div class="header-links-bottom-block-body header-links-bottom-active">
                <span class="header-links-bottom-block-title">
                    Поисковая реклама
                </span>
            </div>
            <a href="#"><div class="header-links-bottom-block-body">
                <span class="header-links-bottom-block-title">
                    Контекстная реклама
                </span>
            </div></a>
            <a href="#"><div class="header-links-bottom-block-body">
                <span class="header-links-bottom-block-title">
                    Ремаркетинг
                </span>
            </div></a>
            <a href="#"><div class="header-links-bottom-block-body">
                <span class="header-links-bottom-block-title">
                    Реклама в социальных сетях
                </span>
            </div></a>
            <a href="#"><div class="header-links-bottom-block-body">
                <span class="header-links-bottom-block-title">
                    SEO продвижение
                </span>
            </div></a>
        </div>
    </div>
</div>
<div class="header-links-jump_back-body">
        @foreach(BreadCrumbs::getBreadCrumbs() as $key=>$value)
        @if($key == "#")
            <span class="header-links-jump_back-title">{{$value}}</span>
        @else
            <a href="{{$key}}"><span class="header-links-jump_back-title">{{$value}}</span></a>
            <p>/</p>
        @endif
        @endforeach 

    </div>
