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
                        <h4>Добавить портфолио</h4>
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form method="post" action="{{route("add-portfolio")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Загловок RUS</label>
                            <input class="form-control" type="text" name="title">
                        </div>

                        <div class="form-group">
                            <label>Загловок Eng</label>
                            <input class="form-control" type="text" name="title_en">
                        </div>

                        <div class="form-group">
                            <label>Хештеги Eng</label>
                            <input class="form-control" type="text" name="tag_en">
                        </div>

                        <div class="form-group">
                            <label>Хештеги Ru</label>
                            <input class="form-control" type="text" name="tag">
                        </div>

                        <div class="form-group">
                            <label>Ссылка</label>
                            <input class="form-control" type="text" name="link">
                        </div>

                        <div class="form-group">
                            <label>Meta Title</label>
                            <input class="form-control" type="text" name="metaTitle">
                        </div>

                        <div class="form-group">
                            <label>Краткое описание и (или)</label>
                            <input class="form-control" type="text" name="metaDescription">
                        </div>

                        <div class="form-group">
                            <label>Meta Keywords</label>
                            <input class="form-control" type="text" name="metaKeywords">
                        </div>

                        <div class="form-group">
                            <label>Описание RUS</label>
                            <textarea name="short_text" class="form-control"  id="" cols="30" rows="10">
                </textarea>
                        </div>

                        <div class="form-group">
                            <label>Описание Eng</label>
                            <textarea name="short_text_en" class="form-control"  id="" cols="30" rows="10">
                </textarea>
                        </div>

                        <div class="form-group">
                            <lavel>Изображение</lavel>
                            <input type="file" name="img_path">
                        </div>

                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">


        <hr>
        <style>
            .table{
                font-size: 12px;
                max-width: 300%;
                width: 115%;
                margin-left: -7%;
            }

            .table input,.table textarea{
                font-size: 12px;
            }


            .file-upload input{
                width: 77%;
            }
        </style>
        <div class="container-fluid mt-3">
            <div>
                <form method="post" action="{{route("edit-portfolio")}}" enctype="multipart/form-data">
                    @csrf
                    <table class="table">
                        <thead>
                            <th>Язык</th>
                            <th>Заголовок</th>
                            <th>Описание</th>
                            <th>Хэштеги</th>
                            <th>Ссылка</th>
                            <th>Meta Title</th>
                            <th>Meta Description</th>
                            <th>Meta Keywords</th>

                            <th>Изображение</th>
                        </thead>
                        <tbody>
                            @foreach($portfolio as $value)
                                <tr>
                                    <td>En</td>
                                    <td><input type="text" class="form-control" name="title_en[]" value="{{$value->title_en}}"></td>
                                    <td>
                                        <textarea name="short_text_en[]" class="form-control"  id="" cols="30" rows="10">
                                            {{$value->short_text_en}}
                                        </textarea>
                                    </td>
                                    <td><input type="text" class="form-control" name="tag_en[]" value="{{$value->title_en}}"></td>
                                </tr>
                                <tr>
                                    <td>Ru</td>
                                    <td>
                                        <input type="hidden" name="id[]" value="{{$value->id}}">
                                        <input type="text" class="form-control" name="title[]" value="{{$value->title}}">
                                    </td>

                                    <td>
                                        <textarea name="short_text[]" class="form-control"  id="" cols="30" rows="10">
                                            {{$value->short_text}}
                                        </textarea>
                                    </td>

                                    <td><input type="text" class="form-control" name="tag_en[]" value="{{$value->title_en}}"></td>
                                    <td><input type="text" class="form-control" name="link[]" value="{{$value->link}}"></td>
                                    <td>
                                        <input type="text" class="form-control" name="metaTitle[]" value="{{$value->metaTitle}}">
                                    </td>
                                    <td>
                                        <textarea name="metaDescription[]" class="form-control" id="" cols="30" rows="10">
                                            {{$value->metaDescription}}
                                        </textarea>
                                    </td>
                                    <td>
                                        <textarea name="metaKeywords[]" class="form-control"  id="" cols="30" rows="10">
                                            {{$value->metaKeywords}}
                                        </textarea>
                                    </td>
                                    <td class="file-upload">
                                        <img class="admin_img" src="{{$value->img_path}}" data-img="{{$value->id}}" class="img-thumbnail blog-image " alt="">
                                        <input type="file" data-img="{{$value->id}}" class="file-image" name="img_path[]">
                                    </td>
                                    <td><button type="submit" class="btn btn-danger" name="del_id" value="{{$value->id}}">X</button></td>
                                </tr>


                                @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>

@endsection
