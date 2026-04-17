<!DOCTYPE html>
<html>
<head>
    <title>Задание 33</title>
</head>
<body>

    <p>~ ~ Задание 33 ~ ~</p>
    <ul>
        @if (!empty($WW) && is_array($WW))
            @php $count = count($WW); @endphp
            
            @foreach ($WW as $index => $SS)
                 @if ($index >= $count - 3)
                    <li><i>{{ $SS }}</i></li>
                @else
                    <li><b>{{ $SS }}</b></li>
                @endif
            @endforeach
        @else
            <li>~Массив пуст ~</li>
        @endif
    </ul>

</body>
</html>
