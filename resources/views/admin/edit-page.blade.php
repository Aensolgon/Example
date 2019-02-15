@extends('admin')
@php
    use \App\Http\Middleware\LocaleMiddleware;
    $lang = App::getLocale();

    $mtitle = "meta_title_".$lang;
    $mkeyword = "meta_keywords_".$lang;
    $mdescription = "meta_description_".$lang;
    $mcanonical = "meta_canonical_".$lang;

    $content = "content_".$lang

@endphp

@section('content')
    <section class="container">
    <h1>{{$page["admin_title"]}}</h1>

    <a class="btn btn-danger" href="{{route('setlocale', ['lang' => 'ru'])}}">Ru</a>
    <a class="btn btn-primary" href="{{route('setlocale', ['lang' => 'eng'])}}">Eng</a>
        <form action="{{route('save-edit-page')}}" method="post">
            @csrf
                <input type="hidden" name="pageId" value="{{$page->id}}">
                <div class="form-group">
                    <label for="">Meta title</label>
                    <input name="{{$mtitle}}" class="form-control" value="{{$page[$mtitle]}}"/>
                </div>
                <div class="form-group">
                        <label for="">Meta keywords</label>
                        <input name="{{$mkeyword}}" class="form-control" value="{{$page[$mkeyword]}}"/>
                    </div>
                    <div class="form-group">
                            <label for="">Meta description</label>
                            <input name="{{$mdescription}}" value="{{$page[$mdescription]}}" class="form-control"/>
                        </div>
                        <div class="form-group">
                                <label for="">Meta canonical</label>
                                <input name="{{$mcanonical}}" value="{{$page[$mcanonical]}}" class="form-control"/>
                            </div>
                <div class="form-group">
                    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
                    <label for="">Content</label>
                    <textarea id="ckeditor" name="{{$content}}">
                        {{$page[$content]}}
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
                <a href="{{route('page-list')}}" class="btn btn-primary mb-3">Закрыть</a>
        </form>
    </section>

@endsection

