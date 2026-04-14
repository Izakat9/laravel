<!DOCTYPE html>
<html>
<head>
<title>Задание 32  ^^
</title>
</head>
<body> 
    
   
    <p>~ ~ Задание 32 ~ ~</p>
<ul>
    @foreach ($WW as $ss)
        <li class=" {{ $loop->first ? 'first' : 'Первый' }}
                    {{ $loop->last ? 'last' : 'Последний' }}">
                     
            {{ $loop->first ? 'first' : ''}} 
            {{ $loop->last ? 'last' : '' }} ^^ {{ $ss }}
        </li>
    @endforeach
</ul>

   
</body>
</html>
