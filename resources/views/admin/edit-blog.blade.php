@extends('admin')
@php
    use \App\Http\Middleware\LocaleMiddleware;

@endphp
@section('content')
    <section class="container">
        <h1>Создать блог</h1>

        <form action="{{route('save-edit-blog')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$blog->id}}">

            <div class="form-group">
                <label>Link</label>
                <div class="input-group control-group increment center" >
                    <input type="text" id="" value="{{$blog->link}}" name="link" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="">Meta title</label>
                <input name="metaTitle" class="form-control" value="{{$blog->meta_title}}"/>
            </div>
            <div class="form-group">
                <label for="">Meta keywords</label>
                <input name="metaKeywords" class="form-control" value="{{$blog->meta_keywords}}"/>
            </div>
            <div class="form-group">
                <label for="">Meta description</label>
                <input name="metaDescription" value="{{$blog->meta_description}}" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Meta canonical</label>
                <input name="metaCanonical" value="{{$blog->meta_canonical}}" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input name="title" value="{{$blog->title}}" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Title second</label>
                <input name="titleSecond" value="{{$blog->title_second}}" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="">Category</label>
                <select name="category" id="" class="form-control">
                    @foreach($menu as $item)
                        @if($item->id == $blog->category_blogs)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Image</label>
                <div class="col-3">
                    <img id="blog-image" class="img-thumbnail" src="{{$blog->img_path}}" alt=""/>
                </div>

                <div class="input-group control-group increment center" >
                    <input type="file" id="file-image" name="imgPath" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="">Short text</label>
                <textarea name="shortText" class="form-control">
                        {{$blog->short_text}}
                    </textarea>
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea id="ckeditor"  name="content">
                        {{$blog->content}}
                    </textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Сохранить</button>
            <a href="{{route('blogs')}}" class="btn btn-primary mb-3">Закрыть</a>
        </form>
    </section>

@endsection

