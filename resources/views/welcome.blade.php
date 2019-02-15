@extends('template')

@section('title') {{$page->metaTitle}} @endsection
@section('keywords') {{$page->metaKeywords}}  @endsection
@section('description') {{$page->metaDescription}}  @endsection
@section('canonical') {{$page->metaCanonical}}  @endsection

@section('content')

        {!! $page->content !!}

        {!! $weLove->content !!}

        @include('blocks.comments')

        {!! $services->content !!}


@endsection