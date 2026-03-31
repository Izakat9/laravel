 <!DOCTYPE html>
<html>
<head>
</head>
<body> 
    <p> ~ ~ Добро пожаловать в 19 задание ~ ~ </p>
@if (count($muss) >0)
	Количество элементов массива = {{ count($muss) }}
	<p>Сумма массивов : </p> 
  <ul>
    <li>{{ $muss[0] }}</li>
    <li>{{ $muss[0] + $muss[1]}}</li>
    <li>{{ $muss[0] + $muss[1] + $muss[2]}}</li>
    <li>{{ $muss[0] + $muss[1] + $muss[2] + $muss[3]}}</li>
    <li>{{ $muss[0] + $muss[1] + $muss[2] + $muss[3]+ $muss[4]}}</li>
    <li>{{ $muss[0] + $muss[1] + $muss[2] + $muss[3]+ $muss[4] + $muss[5]}}</li>
    <li>{{ $muss[0] + $muss[1] + $muss[2] + $muss[3]+ $muss[4] + $muss[5]+ $muss[6]}}</li>
    <li>{{ $muss[0] + $muss[1] + $muss[2] + $muss[3]+ $muss[4] + $muss[5]+ $muss[6]+ $muss[7]}}</li>
    <li>{{ $muss[0] + $muss[1] + $muss[2] + $muss[3]+ $muss[4] + $muss[5]+ $muss[6]+ $muss[7] + $muss[8]}}</li>
  
 </ul>
@elseif (count($muss) ==  0)
	<p>сумма массивов ровно нулю</p>
@endif

 
</body>
</html>