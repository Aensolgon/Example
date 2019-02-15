@extends('template')
@section('title') {{$alfabet->metaTitle}} @endsection
@section('keywords') {{$alfabet->metaKeywords}}  @endsection
@section('description') {{$alfabet->metaDescription}}  @endsection
@section('canonical') {{$alfabet->metaCanonical}}  @endsection
@section('content')

    <div class="header-links-jump_back-body alert">

        <a href="{{route("home")}}"><span class="header-links-jump_back-title">@lang('messages.main')</span></a>
        <p>/</p>
        <a href="{{route("services")}}"><span class="header-links-jump_back-title">@lang('messages.services')</span></a>
        <p>/</p>
        <a href="{{route("inSolutions")}}"><span class="header-links-jump_back-title">@lang('messages.inSolution')</span></a>
        <p>/</p>
        <span class="header-links-jump_back-title">{{$alfabet->name}}</span>

    </div>


    <section class="section-text">
        <div class="section-text-wrapper">
            <div class="section-text-title">
                <h1 class="top-h1-title">{{$alfabet->name}}</h1>
                <div class="section-text-title-image-body">
                    <span class="section-text-title-image-line"></span>
                    <div class="section-text-title-image page10-text-title-image"></div>
                    <span class="section-text-title-image-line"></span>
                </div>
            </div>
            <div class="section-text-content">
                {!! $alfabet->content !!}
            </div>
        </div>
    </section>

    @include("blocks.sliderForAlfabet")
    @include("blocks.ask-form")




    @include('blocks.comments')

    @include('blocks.ideal-for')

    {!! $wordForYou->content !!}

    {!! $commonQuestion->content !!}

    @include('blocks.question-form')

    {!! $services->content !!}
@endsection
