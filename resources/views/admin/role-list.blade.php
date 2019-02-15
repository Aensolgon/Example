@extends('admin')

@section('content')

    <h1>Роли</h1>
    <form action="{{route("save-role")}}" method="get">
        <div>
            <table class="table text-center">
                <thead>
                <th>Email</th>
                <th>Роль</th>
                </thead>
                <tbody>
                @foreach ($role as $item)
                    <tr>
                        <td>{{$item->email}}</td>
                        <td>
                            <div class="form-check">
                                <input type="hidden" name="id[]" value="{{$item->id}}">
                                <input type="radio"  name="role_{{$item->id}}" value="1" class="form-check-input" @if($item->role_id == 1) checked @endif id="">Администратор
                                <input class="ml-5" type="radio"  name="role_{{$item->id}}" value="2" class="form-check-input" @if($item->role_id == 2) checked @endif id="">Менеджер
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>

    </form>

@endsection