<!DOCTYPE html>
<html>
<head>
    <title>Задание 34</title>
</head>
<body>

    <p>~ ~ Задание 34 ~ ~</p>
    <ul>
      @foreach ($WW as $SS)
      @if ($SS === 0)
      @break
      @endif
      <p>Число:{{$SS}}<p>
        @endforeach
    </ul>

</body>
</html>
