@extends('admin')
@section('content')
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            <form method="post" action="{{route("save-alfabet")}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Имя</label>
                    <input type="hidden" name="id" value="{{$alfabet->id}}">
                    <input type="text" class="form-control" name="name" value="{{$alfabet->name}}">
                </div>
                <div class="form-group">
                    <label>Ссылка</label>
                    <input type="text" class="form-control" name="link" value="{{$alfabet->link}}">
                </div>

                <div class="form-group">
                    <label>Информация</label>
                    <textarea name="content" class="ckeditor" id="ckeditor" id="" cols="30" rows="10">
                        {{$alfabet->content}}
                            </textarea>
                </div>

                <div class="form-group">
                    <label>Текст после изображений</label>
                    <textarea name="slider_text" class="ckeditor" id="ckeditor" id="" cols="30" rows="10">
                        {{$alfabet->slider_text}}
                            </textarea>
                </div>

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" class="form-control" name="header" value="{{$alfabet->header}}">
                </div>
                <div class="form-group">
                    <label>Изображение</label>
                    @foreach($file as $item)
                        <div class="form-group" style="width: 50%; height: 214px; margin-bottom: 20px">
                            <img src="{{$item->image_path}}" alt="{{$item->image_path}}" style="width: 400px;height: 214px;">
                            <div class="d-inline-block">
                                <a class="btn btn-danger" href="{{route("delete-image",['id' => $item->id])}}">Удалить</a>
                            </div>
                        </div>

                    @endforeach
                    <input type="file" class="form-control" name="image[]" multiple value="">
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection