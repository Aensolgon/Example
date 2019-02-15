@extends('admin')

@php
    $letters = ['А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'];
@endphp

@section('content')
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h2>Добавить новый пункт</h2>
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form method="post" action="{{route("add-paragraph")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Имя</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Ссылка</label>
                            <input type="text" class="form-control" name="link">
                        </div>

                        <div class="form-group">
                            <label>Информация</label>
                            <textarea name="content" class="ckeditor" id="ckeditor" id="" cols="30" rows="10">

                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Текст после изображений</label>
                            <textarea name="slider_text" class="ckeditor" id="ckeditor" id="" cols="30" rows="10">

                            </textarea>
                        </div>

                        <div class="form-group">
                            <label>Заголовок</label>
                            <input type="text" class="form-control" name="header">
                        </div>
                        <div class="form-group">
                            <label>Изображение</label>
                            <input type="file" multiple class="form-control" name="image[]">
                        </div>

                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <div class="container-fluid mt-3">
            <div>
                <form method="post" action="{{route("edit-paragraph")}}" enctype="multipart/form-data">
                <table class="table alfabet-table">
                    <thead>
                        <th>Буква</th>
                        <th>Имя</th>
                        <th>Ссылка</th>
                        <th>Заголовок</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @csrf
                @foreach($letters as $val)
                    @foreach($alfabet as $item)
                        @if($val == $item->letter)
                        <tr>
                            <td>{{$item->letter}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->link}}</td>
                            <td>{{$item->header}}</td>
                            <td>
                                <a class="btn btn-dark" href="{{route('edit-alfabet',['id'=>$item->id])}}">Изменить</a>
                                <button type="submit" name="del_id" value="{{$item->id}}" class="btn btn-danger">X</button>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                @endforeach
                </tbody>
                </table>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>

@endsection