@extends('admin')

@section('content')
    <section class="container-fluid">


        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3>Категории</h3>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="">
                            <form action="{{route('changeCategory')}}" method="get">
                                <table class="table">
                                    @foreach($menu as $value)
                                        <tr>
                                            <input type="hidden" name="id[]" class="form-control" value="{{$value->id}}">
                                            <td><input name="name[]" type="text" class="form-control" value="{{$value->name}}"></td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td>
                                            <input name="new_name" type="text" class="form-control" value="">
                                            <small id="emailHelp" class="form-text text-muted">Вводить пункты меню через запятую</small>
                                        </td>
                                    </tr>
                                </table>
                                <button type="submit" class="btn btn-success">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <h1>Список блогов</h1>
            <a href="{{route("create-blog")}}" class="btn btn-primary mt-3 mb-3">Создать блог</a>
            <div class="row">
                <table class="table">
                    <thead>
                    <th>Название</th>
                    <th>Краткое описание</th>
                    <th>Категория</th>
                    <th>Статус</th>
                    <th>Действия</th>
                    </thead>
                    <tbody>
                    @foreach($blogs as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td>{{$item->short_text}}</td>
                            <td>{{$item->blog['name']}}</td>
                            <td class="form-check">

                                <input type="checkbox" class="form-check-input status"
                                       @if($item['status'] == 1)
                                       checked
                                       @endif
                                       data-id="{{$item['id']}}" name="status" value="">
                            </td>
                            <td>
                                <p><a href="{{route('edit-blog',['id' => $item->id])}}" class="btn btn-primary">Изменить</a></p>
                                <p><a href="{{route('delete-blog',['id' => $item->id])}}" class="btn btn-danger">Удалить</a></p>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>



@endsection