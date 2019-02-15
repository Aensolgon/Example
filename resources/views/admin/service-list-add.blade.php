@extends('admin')

@section('content')



<form action="{{route('add-services')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <h4>Добавить Rus</h4>
        <input type="hidden" name="lang" value="{{App::getLocale()}}">
        <div class="form-group">
            <label for="name">Название</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="meta_title">Meta title</label>
            <input type="text" class="form-control" name="meta_title" value="">
        </div>

        <div class="form-group">
            <label for="meta_description">Meta Description</label>
            <input type="text" class="form-control" name="meta_description" value="">
        </div>

        <div class="form-group">
            <label for="meta_keywords">Meta KeyWords</label>
            <input type="text" class="form-control" name="meta_keywords" value="">
        </div>

        <div class="form-group">
            <label for="meta_keywords">Краткое описание для страницы услуги</label>
            <textarea type="text" class="form-control" name="service_text" value="">

            </textarea>
        </div>

        <div class="form-group">
            <img src="" data-img="1" class="img-fluid blog-image" alt="">
        </div>

        <div class="form-group">
            <label for="meta_keywords">Изображение для страницы услуги</label>
            <input type="file" data-img="1" class="file-image form-control" name="service_img" value="">
        </div>

        <div class="form-group">
            <label for="name">Контент</label>
            <textarea id="ckeditor" name="content" id="" cols="30" rows="10">

            </textarea>
        </div>

        <div class="form-group">
            <label for="name">Ссылка</label>
            /<input type="text" class="form-control" name="link">
        </div>

        <button class="btn btn-success" type="submit">Добавить</button>
    </div>
</form>


@endsection