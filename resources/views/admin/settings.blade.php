@extends('admin')

@section('content')
    <section class="container-fluid">

        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Настройки почты
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="">
                            <form action="{{route('settings-save')}}" method="get">
                                <table class="table">
                                    <thead>
                                    <th>Тип</th>
                                    <th>Почта</th>
                                    <th>Текст для отправки</th>
                                    </thead>
                                    <tbody>
                                    @foreach($settings as $value)
                                        <tr>
                                            <td>
                                                    @if($value->type_of_application_id == 1)
                                                        <p>Оставить заявку</p>
                                                        @endif
                                                        @if($value->type_of_application_id == 2)
                                                            <p>Заявка на звонок</p>
                                                        @endif
                                                        @if($value->type_of_application_id == 3)
                                                            <p>Вопрос</p>
                                                        @endif
                                                    <input type="hidden" name="id[]" value="{{$value->id}}">
                                            </td>
                                            <td><input type="text" class="form-control" name="mail[]" value="{{$value->emails}}"></td>
                                            <td><input type="text" class="form-control" name="text[]" value="{{$value->email_text}}"></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-success">Сохранить</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>


        </div>


        <div class="row">
            <h1>Заявки</h1>
        </div>
        <div class="">
            <div class="accordion" id="accordionExample">
                @foreach($request as $key=>$item)
                    <div class="border-bottom border-dark">
                        @switch($item->type_of_application_id)

                            @case(1)
                                Тип: Заявка<br>
                                Имя: {{ $item->name }}<br>
                                Email: {{ $item->email }}<br>
                                Ссылка на страницу: <a class="link" href="{{ $item->path }}">{{ $item->path }}</a><br>

                            @break

                            @case(2)
                                Тип: Звонок<br>
                                Имя: {{ $item->name }}<br>
                                Телефон: {{ $item->phone_number }}<br>
                                Ссылка на страницу: <a class="link" href="{{ $item->path }}">{{ $item->path }}</a><br>
                            @break

                            @case(3)
                                Тип: Вопрос <br>
                                Имя: {{ $item->name }}<br>
                                Email: {{ $item->email }}<br>
                                Вопрос: {{ $item->question }}<br>
                                Ссылка на страницу: <a class="link" href="{{ $item->path }}">{{ $item->path }}</a><br>
                            @break

                        @endswitch
                    </div>
                    @endforeach

            </div>
            {{$request->links()}}
        </div>
    </section>
@endsection