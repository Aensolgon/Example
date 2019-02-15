@extends('admin')

@section('content')


    <h1>Page-list</h1>
    <div class="row">
        <table class="table">
            <thead>
                <th>Название</th>
                <th>Изменить</th>
                <th>Ссылки</th>
            </thead>
            <tbody>
                @foreach ($pages as $item)
                <tr>
                    <td>{{$item->admin_title}}</td>
                    <td><a href="{{route('edit-page',["id"=>$item->id])}}">Изменить</a></td>
                    <td>
                        <a href="/{{$item->linkMenu['linkRu']}}">Перейти Ru</a>
                        <br>
                        <a href="/{{$item->linkMenu['linkEn']}}">Перейти Eng</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection