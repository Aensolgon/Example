@extends('template')

@section('title') {{$page->metaTitle}}  @endsection
@section('keywords') {{$page->metaKeywords}}  @endsection
@section('description') {{$page->metaDescription}}  @endsection
@section('canonical') {{$page->metaCanonical}}  @endsection

@section('content')
    <div class="header-links-jump_back-body alert">

        <a href="{{route("home")}}"><span class="header-links-jump_back-title">@lang('messages.main')</span></a>
        <p>/</p>
        <span class="header-links-jump_back-title">@lang('messages.portfolio')</span>


    </div>
<section class="section-text">
    <div class="section-text-wrapper">
        <div class="section-text-content section-text-bl">
            <div class="section-text-content-block">
                {!! $page->content !!}
            </div>
        </div>
    </div>
</section>


@include("blocks.portfolio")

    {!! $services->content !!}

@endsection





