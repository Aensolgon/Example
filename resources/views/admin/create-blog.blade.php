@extends('admin')
@php
    use \App\Http\Middleware\LocaleMiddleware;

@endphp
@section('content')

        <section class="container">
            <h1>Создать блог</h1>

            <form action="{{route('save-blog')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="lang" value="{{App::getLocale()}}">

                <div class="form-group">
                    <label>Link</label>
                    <div class="input-group control-group increment center" >
                        <input type="text" id="" name="link" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Meta title</label>
                    <input name="metaTitle" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="">Meta keywords</label>
                    <input name="metaKeywords" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="">Meta description</label>
                    <input name="metaDescription" value="" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Meta canonical</label>
                    <input name="metaCanonical" value="" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Title</label>
                    <input name="title" value="" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Title second</label>
                    <input name="titleSecond" value="" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" id="" class="form-control">
                        @foreach($menu as $value)

                            <option value="{{$value->id}}">{{$value->name}}</option>
                            
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Img path</label>
                    <div class="input-group control-group increment center" >
                        <input type="file" id="" name="imgPath" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Short text</label>
                    <textarea name="shortText" value="" class="form-control">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea id="ckeditor" name="content">

                    </textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-3">Отправить</button>
                <a href="{{route('blogs')}}" class="btn btn-primary mb-3">Закрыть</a>
            </form>
        </section>

@endsection

