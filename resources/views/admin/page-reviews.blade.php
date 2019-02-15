@extends('admin')

@section('content')

    <h1>Page reviews</h1>
    <a class="btn btn-primary mb-3" href="{{route("create-review")}}">Создать отзыв</a>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <th>Название компании</th>
                <th>Имя директора</th>
                <th>Дата создания</th>
                <th>Статус</th>
            </thead>
            <tbody>
            @foreach ($reviews as $key => $item)
<tr>
    <td>{{$item['company_name']}}</td>
    <td>{{$item['author_name']}}</td>
    <td>{{$item['created_at']}}</td>
    <td class="form-check">

        <input type="checkbox" class="form-check-input status"
               @if($item['status'] == 1)
                    checked
               @endif
               data-id="{{$item['id']}}"  name="status" value="">
  </td>
</tr>


            @endforeach
              
            </tbody>
        </table>
    </div>
    
@endsection