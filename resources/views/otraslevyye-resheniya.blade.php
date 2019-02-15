@extends('template')
@section('title') {{$page->metaTitle}} @endsection
@section('keywords') {{$page->metaKeywords}}  @endsection
@section('description') {{$page->metaDescription}}  @endsection
@section('canonical') {{$page->metaCanonical}}  @endsection
@section('content')


@php
    $letters = ['А','Б','В','Г','Д','Е','Ё','Ж','З','И','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Э','Ю','Я'];
@endphp
<div class="header-links-jump_back-body alert">

    <a href="{{route("home")}}"><span class="header-links-jump_back-title">Главная</span></a>
    <p>/</p>
    <a href="{{route("services")}}"><span class="header-links-jump_back-title">Услуги</span></a>
    <p>/</p>
    <span class="header-links-jump_back-title">Отраслевые решения</span>


</div>
    {!! $page->content !!}
    <section class="section-work page4-section-work">




        <div class="create_site-wrapper page4-create_site-wrapper">
            <div class="top-h2-title-body">
                <h2 class="top-h2-title">@lang('messages.wayOfDeal')</h2>
            </div>
            <div class="create_site-body">

            @foreach($letters as $key => $val)

            <div class="create_site-block">
                <div class="create_site-block-title">{{$val}}</div>
                    <div class="create_site-block-list">
                        <ul class="create_site-block-list-ul">
                        @foreach($alfabet as $item)
                            @if($val == $item->letter)
                                <li class="create_site-block-list-li">
                                    <a class="alfa"
                                       style="color:red"
                                       href="{{route('alfaPage',['alfaUrl' => $item->link])}}">
                                        {{$item->name}}
                                    </a>
                                </li>
                            @endif
                         @endforeach
                        </ul>
                    </div>
            </div>
            @endforeach
            </div>
    </section>
<!--<section class="section-content">
    <div class="section-content-wrapper">
        <div class="img-parent section-content-image">
            <img style="" id="cont" src="/img/Z.png" alt="Z">
        </div>
    </div>
</section>
<div id="overflow">
    <span id="exit">X</span>
    <img src="" id="overflow-img" alt="">
</div>-->
    <script>
        /*let imgContainer = document.getElementById("cont");

        let imgOverflow = document.getElementById("overflow-img");

        let overflow = document.getElementById("overflow");
        let hover = document.querySelectorAll(".alfa");
        let exit = document.getElementById("exit");
        

        let img = document.querySelectorAll(".img-buff");

        if(hover){
            hover.forEach((item)=>{
                item.addEventListener("click",function(e){
                    console.log(e.currentTarget.dataset);
                    e.preventDefault();
                    
                    for(let i = 0;i<img.length;i++){
                        if(img[i].id == e.currentTarget.dataset.img_id){
                            imgContainer.src = img[i].src; 
                        }
                    }




                })
            });

        }
        exit.addEventListener("click",function(e){
            overflow.style.display = "none";
        })

        if(imgContainer){
            imgContainer.addEventListener("click",function(e){
                imgOverflow.src = imgContainer.src;
                overflow.style.display = "block";
            })
        }*/
    </script>
{!! $services->content !!}




@endsection
