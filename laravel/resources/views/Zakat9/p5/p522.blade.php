 <!DOCTYPE html>
<html>
<head>
</head>
<body> ДОДЕЛАТЬ дадададад
    <p> ~ ~ Добро пожаловать в 20 задание ~ ~ </p>
@if (count($muss) >0)
	Количество элементов массива = {{ count($muss) }}
	<p>Сумма массивов : </p> 
  <ul>
    <li>{{ $ss[0] **2  }}</li>
 
   
 </ul>
@elseif (count($muss) ==  0)
	<p>сумма массивов равно нулю</p>
@endif


 
</body>
</html>