
<section class="section-work page_duplicated-section-work">
    <div class="section-work-wrapper search-advertising-work-wrapper">
        <div class="search-advertising-body">

            @foreach($uploadImages as $key=>$value)
                <div data-ind = "{{$key}}" class="section-work-wrapper-block page_duplicated-section-work-wrapper-block alfabetImg" style="background-image: url({{$value->image_path}})">
                </div>
                @endforeach


        </div>
        <div class="search-advertising-body">
            <div class="search-advertising-text-body">
                {!! $alfabet->slider_text !!}
            </div>
        </div>
    </div>
</section>

<style>
    .slider {
        position: fixed;
        display: none;
        overflow-y: scroll;
        top:0px;
        height: 100vh;
        text-align: center;
        width: 100%;
    }

    .slider__items {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .slider__item {
        position: relative;
        display: none;
        width: 100%;
        transition: transform 0.6s ease;
        backface-visibility: hidden;
        background-color: rgb(1,1,1,0.7);
        z-index: 4;
    }

    .slider__item_active,
    .slider__item_next,
    .slider__item_prev {
        display: block;
    }

    .slider__item_next,
    .slider__item_prev {
        position: absolute;
        top: 0;
    }

    .slider__item_next.slider__item_left,
    .slider__item_prev.slider__item_right {
        transform: translateX(0);
    }

    .slider__item_next,
    .slider__item_right.slider__item_active {
        transform: translateX(100%);
    }

    .slider__item_prev,
    .slider__item_left.slider__item_active {
        transform: translateX(-100%);
    }


    .slider__control {
        z-index: 10;
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: 0.7;
    }

    .slider__control:hover,
    .slider__control:focus {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: .9;
    }

    .slider__control_prev {
        left: 0;
    }

    .slider__control_next {
        right: 0;
    }

    .slider__control::before {
        content: '';
        display: inline-block;
        width: 60px;
        height: 60px;
        background: transparent no-repeat center center;
        background-size: 100% 100%;
        position: fixed;
    }

    .slider__control_prev::before {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='grey' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .slider__control_next::before {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='grey' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    /* индикаторы слайдера */

    .slider__indicators {
        position: absolute;
        right: 0;
        bottom: 10px;
        left: 0;
        z-index: 15;
        display: flex;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none;
    }

    .slider__indicator {
        position: relative;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 6px;
    }

    .slider__indicator::before {
        position: absolute;
        top: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: "";
    }

    .slider__indicator::after {
        position: absolute;
        bottom: -10px;
        left: 0;
        display: inline-block;
        width: 100%;
        height: 10px;
        content: "";
    }

    .slider__indicator_active {
        background-color: #fff;
    }

    .slide img {
        display: inline-block;
        height: auto;
        max-width: 100%;
    }
    svg{
        stroke-width: 2;
    }

</style>




<div id="slider" class="slider alfaSll">
    <div id="exit"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" version="1.1" height="30" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
        <g>
          <path fill="grey" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
        </g>
      </svg></div>
    <ol class="slider__indicators">

        @foreach($uploadImages as $key=>$value)
            @if($key == 0)
                    <li class="slider__indicator slider__indicator_active" data-slide-to="0"></li>
                @else
                    <li class="slider__indicator" data-slide-to="{{$key}}"></li>
                @endif
            @endforeach



    </ol>
    <div class="slider__items">
        @foreach($uploadImages as $key=>$value)

            @if($key == 0)
                <div class="slider__item slider_margin slider__item_active" data-index = "{{$key}}"> <img src="{{$value->image_path}}" alt=""></div>
            @else
                <div class="slider__item slider_margin" data-index = "{{$key}}"> <img src="{{$value->image_path}}" alt=""> </div>
                @endif


        @endforeach
    </div>
    <a class="slider__control slider__control_prev" href="#" role="button"></a>
    <a class="slider__control slider__control_next" href="#" role="button"></a>
</div>




<script src="{{asset('/js/minislider.js')}}">


</script>