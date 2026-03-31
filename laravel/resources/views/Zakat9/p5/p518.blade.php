 <!DOCTYPE html>
<html>
<head>
</head>
<body> 
    <p> ~ ~ Добро пожаловать в 18 задание ~ ~ </p>
@if (count($muss) >0)
	Количество элементов массива = {{ count($muss) }}
	<p>Сумма массивов : {{ $muss[0] + $muss[1]+ $muss[2]+ $muss[3]+ $muss[4]+ $muss[5]+ $muss[6]+ $muss[7]+ $muss[8] }}</p> 
  
@elseif (count($muss) ==  0)
	<p>сумма массивов ровно нулю</p>
@endif

 
</body>
</html>