<link href="{{ asset('/css/slider.css') }}" rel="stylesheet">
<link href="{{ asset('/css/slider-mobile.css') }}" rel="stylesheet">
<div class="center-block-reviews-body mobile">
        <div class="center-block-reviews">
            <p>@lang('messages.callBack')</p>
        </div>
    </div>
<section class="section section-slider">
    

    <div class="sliderReview">
            <div class="carousel-center-block">
                    <div class="intermediate-block" style="z-index: 3;">
                        <div class="center-block-reviews-body">
                            <div class="center-block-reviews">
                                <p>@lang('messages.callBack')</p>
                            </div>
                        </div>
                        <div class="center-block-like">
                            <img src="/img/Thumb-up.svg" alt=""/>
                        </div>
                        <div class="center-block-line-body">
                            <div class="center-block-line"></div>
                            <div class="center-block-line-image">
                                <img src="/img/mediamart-copy3.png" alt=""/>
                            </div>
                            <div class="center-block-line"></div>
                        </div>
                        <div class="button-slider">
                                <a class="prev">&#10094;</a>
                                <div class="slider-dots">
                                        @for($i = 0;$i<ceil(count($comments)/2);$i++)
                                            <span class="slider-dots_item" onclick="currentSlide({{$i+1}})"></span>
                                        @endfor
                                    </div>
                                
                                <a class="next">&#10095;</a>
                            </div>
                        </div>
                   
<div class="slider">
        @for($i = 0;$i<count($comments);$i+=2)

            <div class="carousel-item carousel-item-blue">
                <div class="carousel-item-blue-body">
                    <div class="carousel-item-blue-body-image carousel-image1" style="background: url('{{$comments[$i]->author_logo}}');
                            background-size: contain;
                            background-repeat: no-repeat;
                            background-position-x: 135px;">
                        <div class="carousel-item-blue-body-image-logo carousel-logo1">
                            <img src="{{$comments[$i]->company_logo}}" alt=""/>
                        </div>
                    </div>
                    <div class="carousel-item-blue-body-info">
                        <span class="name-review">{{$comments[$i]->author_name}}</span>
                        <span class="company-review">{{$comments[$i]->company_name}}</span>
                        <span class="text-review">{{$comments[$i]->description}}</span>
                    </div>
                </div>

                @if(isset($comments[$i+1]))
                    <div class="carousel-item-blue-body">
                        <div class="carousel-item-blue-body-image carousel-image2" style="background: url('{{$comments[$i+1]->author_logo}}');
                        background-size: contain;
                        background-repeat: no-repeat;
                        background-position-x: 135px;">
                            <div class="carousel-item-blue-body-image-logo carousel-logo2">
                                <img class="company_logo" src="{{$comments[$i+1]->company_logo}}" alt=""/>
                            </div>
                        </div>
                        <div class="carousel-item-blue-body-info">
                            <span class="name-review">{{$comments[$i+1]->author_name}}</span>
                            <span class="company-review">{{$comments[$i+1]->company_name}}</span>
                            <span class="text-review">{{$comments[$i+1]->description}}</span>
                        </div>
                    </div>
                @else
                    <div class="carousel-item-blue-body" style="visibility: hidden">
                        <div class="carousel-item-blue-body-image carousel-image2" style="background: url('{{$comments[0]->author_logo}}')">
                            <div class="carousel-item-blue-body-image-logo carousel-logo2">
                                <img class="company_logo" src="{{$comments[0]->company_logo}}" alt=""/>
                            </div>
                        </div>
                        <div class="carousel-item-blue-body-info">
                            <span class="name-review">{{$comments[0]->author_name}}</span>
                            <span class="company-review">{{$comments[0]->company_name}}</span>
                            <span class="text-review">{{$comments[0]->description}}</span>
                        </div>
                    </div>
                @endif
            </div>

        @endfor
    </div>
</div>
         
   
           
        
            <div class="swiper-container" id="slider-mobile">
                <div class="swiper-wrapper">
                    @foreach($comments as $key=>$value)
                        @if(isset($comments[$key]))
                        
                            <div class="swiper-slide">
                                <div class="swiper-body">
                                <div class="swiper-body-image"  style="background-image: url('{{$comments[$key]->company_logo}}')"></div>
                                <div class="swiper-body-image" style="background-image: url('{{$comments[$key]->author_logo}}')"></div>
                            
                                <div class="swiper-body-text">
                                <span class="name-review">{{$comments[$key]->author_name}}</span>
                                <span class="company-review">{{$comments[$key]->company_name}}</span>
                                <span class="text-review">{{$comments[$key]->description}}</span>
                                </div>
                            </div>
                    </div>
                @endif
            @endforeach
                </div>
            </div>
        </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next comments"></div>
              <div class="swiper-button-prev comments"></div>

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


