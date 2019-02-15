<table>

    @if(isset($claim->message))
        <tr>
            <td>Сообщение</td>
            <td>{{$text}}</td>
        </tr>
    @endif


    @if(isset($claim->name))
        <tr>
            <td>Имя</td>
            <td>{{$claim->name}}</td>
        </tr>
    @endif

    @if(isset($claim->phone_number))
        <tr>
            <td>Номер телефона</td>
            <td>{{$claim->phone_number}}</td>
        </tr>
    @endif


    @if(isset($claim->question))
        <tr>
            <td>Вопрос</td>
            <td>{{$claim->question}}</td>
        </tr>
    @endif

    @if(isset($claim->email))
        <tr>
            <td>Email</td>
            <td>{{$claim->email}}</td>
        </tr>
    @endif


</table>

