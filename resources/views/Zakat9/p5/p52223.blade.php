 <!DOCTYPE html>
<html>
<head>
</head>
<body> 
    <p> ~ ~ Добро пожаловать в 22 задание ~ ~ </p>
<ul>
  @foreach ($muss as $key => $WW)
		<li><strong>{{$key }}: </strong>{{$WW}} </li>
  @endforeach
</ul><br>
    <p> ~ ~ Добро пожаловать в 23 задание ~ ~ </p>
<ul>
  @foreach ($muss as $key => $WW)
		<li><strong>{{$key+1 }}: </strong>{{$WW}} </li>
  @endforeach
</ul>

 
</body>
</html>