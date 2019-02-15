@extends('template')

@section('title') {{$portfolioList->metaTitle}}  @endsection
@section('keywords') {{$portfolioList->metaKeywords}}  @endsection
@section('description') {{$portfolioList->metaDescription}}  @endsection
@section('canonical') {{$portfolioList->metaCanonical}}  @endsection


@section('content')
    <section class="portfolio_project">

        <div class="header-links-jump_back-body alert">

            <a href="{{route("home")}}"><span class="header-links-jump_back-title">@lang('messages.main')</span></a>
            <p>/</p>
            <a href="{{route("portfolio")}}"><span class="header-links-jump_back-title">@lang('messages.portfolio')</span></a>
            <p>/</p>
            <span class="header-links-jump_back-title">{{$portfolioList->title}}</span>

        </div>

        <div class="portfolio_project-wrapper">

            <div class="section-text-title portfolio-top-h1-title">
                <h1 class="top-h1-title">{{$portfolioList->title}}</h1>
            </div>
            <div class="portfolio_project-body">
                <div class="portfolio_project-block">
                    <div class="portfolio_project-block-image-body">
                        <div class="portfolio_project-block-image">
                            <img src="/img/decidious-tree.svg" alt="tree">
                        </div>
                        <span class="portfolio_project-block-image-title">@lang('messages.whatDone')</span>
                    </div>
                    <div class="portfolio_project-block-list-body">
                        <ul class="portfolio_project-block-list">
                        @foreach(explode(',',$portfolioList->whatDone ) as $key=>$value)
                                <li class="portfolio_project-block-li">@lang('messages.createTZ')</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="portfolio_project-block">
                    <div class="portfolio_project-block-image-body">
                        <div class="portfolio_project-block-image">
                            <img src="/img/clock.svg" alt="clock">
                        </div>
                        <span class="portfolio_project-block-image-title">@lang('messages.timeSpend')</span>
                    </div>
                    <div class="portfolio_project-block-list-body">
                        <ul class="portfolio_project-block-list">
                            <li class="portfolio_project-block-li">{{$portfolioList->spendTime}}</li>
                        </ul>
                    </div>
                </div>
                <div class="portfolio_project-block">
                    <div class="portfolio_project-block-image-body">
                        <div class="portfolio_project-block-image">
                            <img src="/img/man.svg" alt="man">
                        </div>
                        <span class="portfolio_project-block-image-title">@lang('messages.whoMadeThis')</span>
                    </div>
                    <div class="portfolio_project-block-list-body">
                        <ul class="portfolio_project-block-list">

                            @foreach(explode(',',$portfolioList->whoMade ) as $key=>$value)
                                <li class="portfolio_project-block-li">{{$value}}</li>
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_task">
        <div class="section_task-wrapper">
            <h2 class="top-h2-title">@lang('messages.task')</h2>
            <div class="section_task-body">
                {{$portfolioList->short_text}}
            </div>
        </div>
    </section>
    <section class="section-work page4-section-work">
        <div class="create_site-wrapper page7-create_site-wrapper">
            <div class="top-h2-title-body">
                <h2 class="top-h2-title">@lang('messages.fromTo')</h2>
            </div>
            <div class="create_site-body">
                <div class="create_layout-block">
                    <img src="/img/maket.png" alt="maket">
                </div>
                <div class="create_layout-block">
                    <img src="/img/maket1.png" alt="maket">
                </div>
                <div class="create_layout-block">
                    <img src="/img/maket2.png" alt="maket">
                </div>
                <div class="create_layout-block">
                    <img src="/img/maket3.png" alt="maket">
                </div>
            </div>
        </div>
    </section>
    <section class="section-project_site-web">
        <div class="section-project_site-web-body">
            <div class="section-project_site-web-block-image">
                @include("blocks.portfolio")
            </div>
            <div class="section-project_site-web-block-button">
                <a href="{{$portfolioList->link}}"><div class="section-project_site-web-button">@lang('messages.goToSite')</div></a>
            </div>
        </div>
    </section>
    {!! $services->content !!}
@endsection
