@extends('template')

@section('title') {{$blog->meta_title}}  @endsection
@section('keywords') {{$blog->meta_keywords}}  @endsection
@section('description') {{$blog->meta_description}}  @endsection
@section('canonical') {{$blog->meta_canonical}}  @endsection

@section('content')
    <div class="header-links-jump_back-body alert">

        <a href="{{route("home")}}"><span class="header-links-jump_back-title">@lang('messages.main')</span></a>
        <p>/</p>
        <a href="{{route("blog")}}"><span class="header-links-jump_back-title">@lang('messages.blog')</span></a>
        <p>/</p>
        <span class="header-links-jump_back-title">{{$blog->title}}</span>

    </div>
     <section class="section-text blog-inside-text">
         <div class="section-text-wrapper">
            <div class="section-text-title">
                    <h1 class="top-h1-title">{{$blog->title}}</h1>
                    <div class="section-text-title-image-body">
                        <span class="section-text-title-image-line"></span>
                        <div class="section-text-title-image"></div>
                        <span class="section-text-title-image-line"></span>
                    </div>
                </div>
         </div>
     </section>
    <section class="section-blog">
            <div class="section-blog-wrapper">
                <div class="section-blog-content-body">  
                    <div class="section-blog-content-blocks">  
            <div class="section-blog-content-image">
            <img src="{{$blog->img_path}}" alt="">
            </div>
            <div class="section-blog-content-text">
                {!! $blog->content !!}
            </div>
                    </div>
        </div>

        <div class="section-blog-links-body blog-inside-links-body">
                <div class="section-blog-links-block">
                    <div class="section-blog-links-block-title">@lang('messages.categoryBlog')</div>
                    <ul class="section-blog-links-block-ul">
                        @if($categoryBlog != "")
                            @foreach($categoryBlog as $key=>$value)
                           

                                <li class="section-blog-links-block-li"><a href="{{route('takeBlog',['id'=> $value->id])}}">{{$value->name}}</a></li>

                            @endforeach
                            @endif
                    </ul>
                </div>
            </div>
    </section>



    {!! $services->content !!}
@endsection












{{-- <section class="section-blog">
        <div class="section-blog-wrapper">
            <div class="section-blog-content-body">
                @foreach($blog as $key=>$value)

                    <div class="section-blog-content-block">
                        <div class="section-blog-content-title">{{$value->title}}</div>
                        <div class="section-blog-content-image">
                            <img src="{{$value->img_path}}" alt="blog-image">
                        </div>
                        <div class="section-blog-content-text">
                            {{$value->short_text}}
                        </div>
                        <a href="{{route('getBlog',['name' => $value->link])}}"><div class="section-blog-content-text_link">@lang('messages.readMore')</div></a>
                    </div>

                    @endforeach


        </div>
        <div class="section-blog-links-body">
                <div class="section-blog-links-block">
                    <div class="section-blog-links-block-title">@lang('messages.categoryBlog')</div>
                    <ul class="section-blog-links-block-ul">
                        @if($categoryBlog != "")
                            @foreach($categoryBlog as $key=>$value)
                           

                                <li class="section-blog-links-block-li"><a href="{{route('takeBlog',['id'=> $value->id])}}">{{$value->name}}</a></li>

                            @endforeach
                            @endif
                    </ul>
                </div>
            </div>
    </section> --}}