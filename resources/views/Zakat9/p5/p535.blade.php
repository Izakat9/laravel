<!DOCTYPE html>
<html>
<head>
    <title>Задание 35</title>
</head>
<body>

    <p>~ ~ Задание 35 ~ ~</p>
    <ul>
      @foreach ($WW as $SS)
      @if ($SS > 0)

      <p>Число:{{$SS}}<p>
      @endif
        @endforeach
    </ul>

</body>
</html>
