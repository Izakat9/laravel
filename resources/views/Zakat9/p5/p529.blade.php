<!DOCTYPE html>
<html>
<head>
<title>Задание 29</title>
</head>
<body> 
    <p>~ ~ Задание 29 ~ ~</p>

  <ul>
    @if(!isset($WW) || empty($WW))
Массив пустой или там нету - users
    @else
    @foreach ($WW as $SS)
    @if ($SS >0)
        <li>
            {{ $SS }} 
        </li>
@endif
@endforeach
@endif
</ul>
</body>
</html>
