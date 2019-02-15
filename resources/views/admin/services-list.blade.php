@extends('admin')

@section('content')

    <h1>Услуги</h1>
    <div class="col-12">
        <a href="{{route('service-add')}}" class="btn btn-lg btn-warning">Добавить услугу</a>
    </div>
    <form action="{{route("save-services")}}" method="post">
        @csrf
        <div class="col-12">
            <table class="table">
                <thead>
                <th>Название</th>
                <th>Ссылка</th>
                <th>Язык</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($sList as $key=>$value)
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>{{$value->link}}</td>
                            <td>{{$value->lang}}</td>
                            <td>
                                <a class="btn btn-dark" href="{{route('service-edit',['id'=> $value->id])}}">Изменить</a>
                                <button class="btn btn-danger" value="{{$value->id}}" name="del_id">X</button>
                            </td>
                        </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </form>

@endsection