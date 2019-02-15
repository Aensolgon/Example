@extends('admin')

@section('content')



    <form action="{{route('save-services')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h4>Изменить</h4>
        <div class="form-group">

            <input type="hidden" name="id" value="{{$service->id}}">
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" name="name" value="{{$service->name}}">
            </div>

            <div class="form-group">
                <label for="meta_title">Meta title</label>
                <input type="text" class="form-control" name="meta_title" value="{{$service->meta_title}}">
            </div>

            <div class="form-group">
                <label for="meta_description">Meta Description</label>
                <input type="text" class="form-control" name="meta_description" value="{{$service->meta_description}}">
            </div>

            <div class="form-group">
                <label for="meta_keywords">Meta KeyWords</label>
                <input type="text" class="form-control" name="meta_keywords" value="{{$service->meta_keywords}}">
            </div>
            <div class="form-group">
                <label for="status">Отображать на сайте?</label>

                <input type="radio" name="status" @if($service->status == 0) checked @endif value="0">Нет
                <input type="radio" name="status" @if($service->status == 1) checked @endif value="1">Да

            </div>

            <div class="form-group">
                <label for="content">Контент</label>
                <textarea id="ckeditor" name="content" id="" cols="30" rows="10">
                    {{$service->content}}
                </textarea>
            </div>

            <div class="form-group">
                <img src="{{$service->service_img}}" data-img="{{$service->id}}" class="img-fluid" alt="">
            </div>

            <div class="form-group">
                <label for="meta_keywords">Краткое описание для страницы услуги</label>
                <textarea type="text" class="form-control" name="service_text" value="">
                    {{$service->service_text}}
                </textarea>
            </div>

            <div class="form-group">
                <label for="meta_keywords">Изображение для страницы услуги</label>
                <input type="file" data-img="{{$service->id}}" class="form-control" name="service_img" value="">
            </div>

            <div class="form-group">
                <label for="link">Ссылка</label>
                /<input type="text" class="form-control" name="link" value="{{$service->link}}">
            </div>



            <button class="btn btn-success" type="submit">Сохранить</button>
        </div>
    </form>


@endsection