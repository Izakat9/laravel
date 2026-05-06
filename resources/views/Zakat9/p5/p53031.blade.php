<!DOCTYPE html>
<html>
<head>
<title>Задание 30 && 31  ^^
</title>
</head>
<body> 
    <p>~ ~ Задание 30 ~ ~</p>
<ul>
    @foreach ($WW as $ss)
        <li>
            {{$loop -> index}}) {{$ss}}
        </li>
    @endforeach
</ul>
   
    <p>~ ~ Задание 31 ~ ~</p>
<ul>
    @foreach ($WW as $ss)
        <li>
            {{$loop -> iteration }}) {{$ss}}
        </li>
    @endforeach
</ul>
   
</body>
</html>
