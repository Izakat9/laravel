<!DOCTYPE html>
<html>
<head>
<title>Задание 27 , 28</title>
</head>
<body> 
    <p>~ ~ Список сотрудников (Задание 27) ~ ~</p>

  <ul>
    @foreach ($employees as $employee)
        <li>
            {{ $employee['name'] }} {{ $employee['surname'] }} — {{ $employee['salary'] }}
        </li>
    @endforeach
</ul>

    <p>~ ~ Задание 28 ~ ~</p>

    <table border="1">
        <thead>
            <tr>
                <th>- Имя -</th>
                <th>- Фамилия -</th>
                <th>- З/П -</th>
            </tr>
        </thead>
        
            @foreach ($employees as $empty)
            <tr>
                @foreach ($empty as $value)
                        <td>~ {{ $value }}</td>
                @endforeach
                </tr>
            @endforeach
        
    </table>
</body>
</html>
