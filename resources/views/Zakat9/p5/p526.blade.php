 <!DOCTYPE html>
<html>
<head>
</head>
<body> 
    <p> ~ ~ Добро пожаловать в 26 задание ~ ~ </p>

<table border="3">
    @foreach ($muss as $row): 
        <tr>
    @foreach ($row as $cell):
                <td>{{$cell}}</td>
    @endforeach
        </tr>
    @endforeach
</table>
</body>
</html>