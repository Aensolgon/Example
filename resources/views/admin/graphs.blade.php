@extends('admin')
@section('content')
    <section class="container">
        <table width="614" class="table-striped table" cellspacing="1" cellpadding="3" border="0" bgcolor="#778" style="text-align:center; color: #333; margin-left:23px">
            <tbody><tr bgcolor="#ddddff">
                <td align="center">Имя</td>
                <td align="center">Код</td>
                <td align="center">Вид</td>
                <td align="center">Описание</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#ffffcc'"><td>&amp;quot;</td>
                <td>&amp;#34;</td>
                <td>"</td>
                <td>двойная кавычка</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;amp;</td>
                <td>&amp;#38;</td>
                <td>&amp;</td>
                <td>амперсанд</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;lt;</td>
                <td>&amp;#60;</td>
                <td>&lt;</td>
                <td>знак "меньше"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;gt;</td>
                <td>&amp;#62;</td>
                <td>&gt;</td>
                <td>знак "больше"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&nbsp;</td>
                <td>&amp;#64;</td>
                <td>@</td>
                <td>собачка</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&nbsp;</td>
                <td>&amp;#46;</td>
                <td>.</td>
                <td>точка</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;nbsp;</td>
                <td>&amp;#160;</td>
                <td>&nbsp;</td>
                <td>неразрывный пробел</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;iexcl;</td>
                <td>&amp;#161;</td>
                <td>¡</td>
                <td>перевернутый восклицательный знак</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;cent;</td>
                <td>&amp;#162;</td>
                <td>¢</td>
                <td>цент</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;euro;</td>
                <td>&amp;#8364;</td>
                <td>€</td>
                <td>евро</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;pound;</td>
                <td>&amp;#163;</td>
                <td>£</td>
                <td>фунт стерлингов</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;curren;</td>
                <td>&amp;#164;</td>
                <td>¤</td>
                <td>денежная единица</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;yen;</td>
                <td>&amp;#165;</td>
                <td>¥</td>
                <td>иена или юань</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;brvbar;</td>
                <td>&amp;#166;</td>
                <td>¦</td>
                <td>разорванная вертикальная черта</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;sect;</td>
                <td>&amp;#167;</td>
                <td>§</td>
                <td>параграф</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;uml;</td>
                <td>&amp;#168;</td>
                <td>¨</td>
                <td>умляут</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;copy;</td>
                <td>&amp;#169;</td>
                <td>©</td>
                <td>знак copyright</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;trade;</td>
                <td>&amp;#8482;</td>
                <td>™</td>
                <td>знак торговой марки</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;laquo;</td>
                <td>&amp;#171;</td>
                <td>«</td>
                <td>левая двойная угловая скобка</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;not;</td>
                <td>&amp;#172;</td>
                <td>¬</td>
                <td>знак отрицания</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;shy;</td>
                <td>&amp;#173;</td>
                <td>&shy;</td>
                <td>место возможного переноса</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;reg;</td>
                <td>&amp;#174;</td>
                <td>®</td>
                <td>знак зарегистрированной торговой марки</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;macr;</td>
                <td>&amp;#175;</td>
                <td>¯</td>
                <td>верхняя горизонтальная черта</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;deg;</td>
                <td>&amp;#176;</td>
                <td>°</td>
                <td>градус</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;plusmn;</td>
                <td>&amp;#177;</td>
                <td>±</td>
                <td>плюс-минус</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;times;</td>
                <td>&amp;#215;</td>
                <td>×</td>
                <td>знак умножения</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;divide;</td>
                <td>&amp;#247;</td>
                <td>÷</td>
                <td>знак деления</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;sup2;</td>
                <td>&amp;#178;</td>
                <td>²</td>
                <td>"в квадрате"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;sup3;</td>
                <td>&amp;#179;</td>
                <td>³</td>
                <td>"в кубе"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;acute;</td>
                <td>&amp;#180;</td>
                <td>´</td>
                <td>знак ударения</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;fnof;</td>
                <td>&amp;#402;</td>
                <td>ƒ</td>
                <td>знак функции</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;micro;</td>
                <td>&amp;#181;</td>
                <td>µ</td>
                <td>микро</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;para;</td>
                <td>&amp;#182;</td>
                <td>¶</td>
                <td>символ параграфа</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;middot;</td>
                <td>&amp;#183;</td>
                <td>·</td>
                <td>точка</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;cedil;</td>
                <td>&amp;#184;</td>
                <td>¸</td>
                <td>седиль (орфографический знак)</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;sup1;</td>
                <td>&amp;#185;</td>
                <td>¹</td>
                <td>верхний индекс "один"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;ordm;</td>
                <td>&amp;#186;</td>
                <td>º</td>
                <td>мужской порядковый числитель</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;ordf;</td>
                <td>&amp;#170;</td>
                <td>ª</td>
                <td>женский порядковый числитель</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;raquo;</td>
                <td>&amp;#187;</td>
                <td>»</td>
                <td>правая двойная угловая скобка</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;frac14;</td>
                <td>&amp;#188;</td>
                <td>¼</td>
                <td>одна четвертая</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;frac12;</td>
                <td>&amp;#189;</td>
                <td>½</td>
                <td>одна вторая</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;frac34;</td>
                <td>&amp;#190;</td>
                <td>¾</td>
                <td>три четвертых</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;iquest;</td>
                <td>&amp;#191;</td>
                <td>¿</td>
                <td>перевернутый вопросительный знак</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;larr;</td>
                <td>&amp;#8592;</td>
                <td>←</td>
                <td>стрелка влево</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;uarr;</td>
                <td>&amp;#8593;</td>
                <td>↑</td>
                <td>стрелка вверх</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;rarr;</td>
                <td>&amp;#8594;</td>
                <td>→</td>
                <td>стрелка вправо</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;darr;</td>
                <td>&amp;#8595;</td>
                <td>↓</td>
                <td>стрелка вниз</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;harr;</td>
                <td>&amp;#8596;</td>
                <td>↔</td>
                <td>стрелка влево-вправо</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&nbsp;</td>
                <td>&amp;#9668;</td>
                <td>◄</td>
                <td>стрелка влево</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&nbsp;</td>
                <td>&amp;#9650;</td>
                <td>▲</td>
                <td>стрелка вверх</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&nbsp;</td>
                <td>&amp;#9658;</td>
                <td>►</td>
                <td>стрелка вправо</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&nbsp;</td>
                <td>&amp;#9660;</td>
                <td>▼</td>
                <td>стрелка вниз</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;spades;</td>
                <td>&amp;#9824;</td>
                <td><font face="Times New Roman">♠</font></td>
                <td>знак масти "пики"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;clubs;</td>
                <td>&amp;#9827;</td>
                <td><font face="Times New Roman">♣</font></td>
                <td>знак масти "трефы"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;hearts;</td>
                <td>&amp;#9829;</td>
                <td><font face="Times New Roman">♥</font></td>
                <td>знак масти "черви"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;diams;</td>
                <td>&amp;#9830;</td>
                <td><font face="Times New Roman">♦</font></td>
                <td>знак масти "бубны"</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#ffffcc'"><td>&amp;ne;</td>
                <td>&nbsp;</td>
                <td>≠</td>
                <td>неравенство</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#ffffcc'"><td>&amp;loz;</td>
                <td>&nbsp;</td>
                <td>◊</td>
                <td>не закрашенный ромб</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;circ;</td>
                <td>&amp;#710;</td>
                <td>ˆ</td>
                <td>диакритический знак над гласной</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;tilde;</td>
                <td>&amp;#732;</td>
                <td>˜</td>
                <td>тильда</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;bull;</td>
                <td>&amp;#8226;</td>
                <td>•</td>
                <td>маленький черный кружок</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;hellip;</td>
                <td>&amp;#8230;</td>
                <td>…</td>
                <td>многоточие ...</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;prime;</td>
                <td>&amp;#8242;</td>
                <td>′</td>
                <td>одиночный штрих - минуты</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;Prime;</td>
                <td>&amp;#8243;</td>
                <td>″</td>
                <td>двойной штрих - секунды</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;oline;</td>
                <td>&amp;#8254;</td>
                <td>‾</td>
                <td>надчеркивание</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;frasl;</td>
                <td>&amp;#8260;</td>
                <td>⁄</td>
                <td>косая дробная черта</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;ndash;</td>
                <td>&amp;#8211;</td>
                <td>–</td>
                <td>тире</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;mdash;</td>
                <td>&amp;#8212;</td>
                <td>—</td>
                <td>длинное тире</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;lsquo;</td>
                <td>&amp;#8216;</td>
                <td>‘</td>
                <td>левая одиночная кавычка</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;rsquo;</td>
                <td>&amp;#8217;</td>
                <td>’</td>
                <td>правая одиночная кавычка</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;sbquo;</td>
                <td>&amp;#8218;</td>
                <td>‚</td>
                <td>нижняя одиночная кавычка</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;ldquo;</td>
                <td>&amp;#8220;</td>
                <td>“</td>
                <td>левая двойная кавычка</td>
            </tr>
            <tr style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;rdquo;</td>
                <td>&amp;#8221;</td>
                <td>”</td>
                <td>правая двойная кавычка</td>
            </tr>
            <tr style="background-color: #ffffff; color: #333333;" onmouseout="this.style.color='#333333';this.style.backgroundColor='#ffffff';" onmouseover="this.style.color='#000000';this.style.backgroundColor='#FFFFcc'"><td>&amp;bdquo;</td>
                <td>&amp;#8222;</td>
                <td>„</td>
                <td>нижняя двойная кавычка

                </td>
            </tr>
            </tbody></table>
    </section>

@endsection

