@extends('template')

@section('title') {{$page->metaTitle}}  @endsection
@section('keywords') {{$page->metaKeywords}}  @endsection
@section('description') {{$page->metaDescription}}  @endsection
@section('canonical') {{$page->metaCanonical}}  @endsection

@section('content')
<div class="header-links-jump_back-body alert">
        <a href="{{route("home")}}"><span class="header-links-jump_back-title">@lang('messages.main')</span></a>
        <p>/</p>
        <span class="header-links-jump_back-title">@lang('messages.services')</span>

    </div>

    <section class="section-type_site">
        <div class="section-type_site-wrapper">
            <div class="section-type_site-wrapper-body">
                <h1 class="top-h1-title">@lang('messages.webDevelop')</h1>
                <div class="section-text-title-image-body">
                    <span class="section-text-title-image-line"></span>
                    <div class="section-text-title-image2"></div>
                    <span class="section-text-title-image-line"></span>
                </div>
            </div>
            @include('blocks.ourServices')
        </div>
    </section>




    {!! $services->content !!}


@endsection






