<link href="{{ asset('/css/slider.css') }}" rel="stylesheet">
<link href="{{ asset('/css/slider-mobile.css') }}" rel="stylesheet">

<section class="section-portfolio">
    <div class="section-portfolio-wrapper">
        <div class="section-portfolio-body">
            <span class="section-portfolio-title">@lang('messages.ourWork')</span>
            <div class="section-portfolio-image">

                <div id="slider" class="slider">
                    <ol class="slider__indicators decktop-slider">
                        @for($i = 0;$i<ceil(count($portfolio)/5);$i++)
                            @if($i == 0)
                            <li class="slider__indicator slider__indicator_active" data-slide-to="{{$i}}"></li>
                            @else
                            <li class="slider__indicator" data-slide-to="{{$i}}"></li>
                            @endif
                        @endfor
                    </ol>
                    <div class="slider__items decktop-item">



                        @php
                            $howMany = 0;
                        @endphp
                        @for($i = 0;$i<count($portfolio);$i+=5)
                            @php
                                $howMany = count($portfolio) - $i ;
                            @endphp


                            @if($howMany >= 5)

                                <div class="slider__item slider__item_active">
                                    <div class="slider-item right end"></div>
                                    <div class="slider-item right dual">
                                        <div class="slider-item hover img-container index left-top" style="background-image: url('{{$portfolio[$i]->img_path}}')">
                                            <div class="slider-content">
                                                <h1>{{$portfolio[$i]->title}}</h1><br>
                                                <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                                <a href="{{route('portfolio_item',["link"=>$portfolio[$i]->link])}}">@lang('messages.goTo')</a>
                                            </div>
                                        </div>
                                        <div class="slider-item hover img-container index left-bottom" style="background-image: url('{{$portfolio[$i+1]->img_path}}')">
                                            <div class="slider-content">
                                                <h1>{{$portfolio[$i+1]->title}}</h1><br>
                                                <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                                <a href="{{route('portfolio_item',["link"=>$portfolio[$i+1]->link])}}">@lang('messages.goTo')</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slider-item img-container hover index center" style="background-image: url('{{$portfolio[$i+2]->img_path}}')">
                                        <div class="slider-content">
                                            <h1>{{$portfolio[$i+2]->title}}</h1><br>
                                            <div class="slider-short-text">{{$portfolio[$i]->short_text}}</div>
                                            <a href="{{route('portfolio_item',["link"=>$portfolio[$i+2]->link])}}">@lang('messages.goTo')</a>
                                        </div>
                                    </div>

                                    <div class="slider-item left dual">
                                        <div class="slider-item img-container hover index right-top" style="background-image: url('{{$portfolio[$i+2]->img_path}}')">
                                            <div class="slider-content">
                                                <h1>{{$portfolio[$i+3]->title}}</h1><br>
                                                <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                                <a href="{{route('portfolio_item',["link"=>$portfolio[$i+3]->link])}}">@lang('messages.goTo')</a>
                                            </div>
                                        </div>
                                        <div class="slider-item img-container hover index right-bottom" style="background-image: url('{{$portfolio[$i+2]->img_path}}')">
                                            <div class="slider-content">
                                                <h1>{{$portfolio[$i+4]->title}}</h1><br>
                                                <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                                <a href="{{route('portfolio_item',["link"=>$portfolio[$i+4]->link])}}">@lang('messages.goTo')</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item left end"></div>
                                </div>


                            @elseif($howMany == 4)


                                <div class="slider__item">
                                    <div class="slider-item right end"></div>
                                    <div class="slider-item right dual">
                                        <div class="slider-item hover img-container index four-left-top-four" style="background-image: url('img/tiger.jpg')">
                                            <div class="slider-content">
                                                <h1>{{$portfolio[$i]->title}}</h1><br>
                                                <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                                <a href="{{route('portfolio_item',["link"=>$portfolio[$i]->link])}}">@lang('messages.goTo')</a>
                                            </div>
                                        </div>
                                        <div class="slider-item hover img-container index four-left-bottom-four" style="background-image: url('img/Tiger1.jpg')">
                                            <div class="slider-content">
                                                <h1>{{$portfolio[$i+1]->title}}</h1><br>
                                                <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                                <a href="{{route('portfolio_item',["link"=>$portfolio[$i+1]->link])}}">@lang('messages.goTo')</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="slider-item left dual">
                                        <div class="slider-item img-container hover index four-right-top-four" style="background-image: url('img/Tiger3.jpg')">
                                            <div class="slider-content">
                                                <h1>{{$portfolio[$i+2]->title}}</h1><br>
                                                <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                                <a href="{{route('portfolio_item',["link"=>$portfolio[$i+2]->link])}}">@lang('messages.goTo')</a>
                                            </div>
                                        </div>
                                        <div class="slider-item img-container hover index four-right-bottom-four" style="background-image: url('img/Tiger4.jpg')">
                                            <div class="slider-content">
                                                <h1>{{$portfolio[$i+3]->title}}</h1><br>
                                                <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                                <a href="{{route('portfolio_item',["link"=>$portfolio[$i+3]->link])}}">@lang('messages.goTo')</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slider-item left end"></div>
                                </div>

                            @elseif($howMany == 3)

                                <div class="slider__item">
                                    <div class="slider-item img-container hover left-free" style="background-image: url('img/Tiger1.jpg')">
                                        <div class="slider-content">
                                            <h1>{{$portfolio[$i]->title}}</h1><br>
                                            <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                            <a href="{{route('portfolio_item',["link"=>$portfolio[$i]->link])}}">@lang('messages.goTo')</a>
                                        </div>
                                    </div>

                                    <div class="slider-item img-container hover center" style="background-image: url('img/Tiger3.jpg')">
                                        <div class="slider-content">
                                            <h1>{{$portfolio[$i+1]->title}}</h1><br>
                                            <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                            <a class="slider-link" href="{{route('portfolio_item',["link"=>$portfolio[$i+1]->link])}}">@lang('messages.goTo')</a>
                                        </div>
                                    </div>

                                    <div class="slider-item img-container hover right-free" style="background-image: url('img/Tiger2.jpg')">
                                        <div class="slider-content">
                                            <h1>{{$portfolio[$i+2]->title}}</h1><br>
                                            <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                            <a href="{{route('portfolio_item',["link"=>$portfolio[$i+2]->link])}}">@lang('messages.goTo')</a>
                                        </div>
                                    </div>
                                </div>

                            @elseif($howMany == 2)

                                <div class="slider__item">
                                    <div class="slider-item img-container hover left-image" style="background-image: url('img/Tiger1.jpg')">
                                        <div class="slider-content">
                                            <h1>{{$portfolio[$i]->title}}</h1><br>
                                            <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                            <a href="{{route('portfolio_item',["link"=>$portfolio[$i]->link])}}">@lang('messages.goTo')</a>
                                        </div>
                                    </div>

                                    <div class="slider-item img-container hover right-image" style="background-image: url('img/Tiger3.jpg')">
                                        <div class="slider-content">
                                            <h1>{{$portfolio[$i+1]->title}}</h1><br>
                                            <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                            <a href="{{route('portfolio_item',["link"=>$portfolio[$i]->link])}}">@lang('messages.goTo')</a>
                                        </div>
                                    </div>
                                </div>


                            @elseif($howMany == 1)


                                <div class="slider__item">
                                    <div class="slider-item img-container hover one-image" style="background-image: url('{{$portfolio[$i]->img_path}}')">
                                        <div class="slider-content">
                                            <h1>{{$portfolio[$i]->title}}</h1><br>
                                            <div class="slider-short-text  ">{{$portfolio[$i]->short_text}}</div>
                                            <a href="{{route('portfolio_item',["link"=>$portfolio[$i]->link])}}">@lang('messages.goTo')</a>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        @endfor

                    </div>
                    <a class="slider__control slider__control_prev arrow-desktop" href="#" role="button"></a>
                    <a class="slider__control slider__control_next arrow-desktop" href="#" role="button"></a>
                </div>

                <div class="swiper-container" id="slider1">
                    <div class="swiper-wrapper">

                        @foreach($portfolio as $key=>$value)
                            @if(isset($portfolio[$key]))
                                <div class="swiper-slide" style="background-image: url('{{$portfolio[$key]->img_path}}')">
                                    <a href="{{route('portfolio_item',["link"=>$portfolio[$key]->link])}}" style="width: 100%;height: 100%">
                 
                                    </a>
                                </div>

                            @endif

                        @endforeach
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="/js/custom-slider.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

</script>