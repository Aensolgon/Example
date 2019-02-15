<div class="section-type_site-wrapper-body">
    @foreach($menuHead as $value)

        <div class="section-type_site-wrapper-block">

            <div class="section-type_site-wrapper-block-content">
                <a href="{{route('go-to-page',['url'=>$value->link])}}">
                    <span class="type_site-wrapper-block-content-title">{{$value->name}}</span>
                </a>

                    <div class="type_site-wrapper-block-content-text">
                        {{$value->service_text}}
                    </div>
            </div>
            <a href="{{route('go-to-page',['url'=>$value->link])}}">
                <div class="section-type_site-wrapper-block-content">
                <div class="type_site-wrapper-block-content-img" style="background-image: url('{{$value->service_img}}');" alt="type_site-img"></div>
                    {{-- <img width="570" height="185" src="{{$value->service_img}}" alt="type_site-img" class="type_site-wrapper-block-content-img"> --}}
                </div>
            </a>
        </div>

    @endforeach
</div>
