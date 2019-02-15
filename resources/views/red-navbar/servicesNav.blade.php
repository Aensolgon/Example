
<div class="header-links-bottom-wrapper">
        <div class="header-links-bottom-body">
            <div class="header-links-bottom-block">
                <div class="header-links-bottom-block-body header-links-bottom-active">
                    <span class="header-links-bottom-block-title">
                        Услуги:
                    </span>
                </div>

                @foreach($menuHead as $value)

                    <a href="{{route('go-to-page',['url'=>$value->link])}}">
                        <div class="header-links-bottom-block-body">
                            <span class="header-links-bottom-block-title">
                                {{$value->name}}
                            </span>
                        </div>
                    </a>

                @endforeach
            
                <a href="{{route('digital-page')}}">
                    <div class="header-links-bottom-block-body">
                    <span class="header-links-bottom-block-title">
                        Цифровая реклама
                    </span>
                    </div>
                </a>
            </div>
            <div class="header-links-bottom-block">
                <div class="header-links-bottom-button">
                    <a class="solution" href="{{route('inSolutions')}}">Отраслевые решения</a>
                </div>
            </div>
        </div>
    </div>
    