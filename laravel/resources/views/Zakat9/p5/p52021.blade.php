 <!DOCTYPE html>
<html>
<head>
</head>
<body> 
    <p> ~ ~ Добро пожаловать в 20 задание ~ ~ </p>
@if (count($muss) >0)
	Количество элементов массива = {{ count($muss) }}
	<p>Сумма массивов : </p> 
  <ul>
    <li>{{ $ss[0] **2  }}</li>
    <li>{{ $ss[1] **2  }}</li>
    <li>{{ $ss[2] **2  }}</li>
    <li>{{ $ss[3] **2  }}</li>
    <li>{{ $ss[4] **2  }}</li>
    <li>{{ $ss[5] **2  }}</li>
    <li>{{ $ss[6] **2  }}</li>
    <li>{{ $ss[7] **2  }}</li>
    <li>{{ $ss[8] **2  }}</li>
   
 </ul>
@elseif (count($muss) ==  0)
	<p>сумма массивов равно нулю</p>
@endif

    <p> ~ ~ Добро пожаловать в 21 задание ~ ~ </p>
@if (count($muss) >0)
	Количество элементов массива = {{ count($muss) }}
	<p>Сумма массивов : </p> 
  <ul>
    <li>{{ sqrt($muss[0])  }}</li>
    <li>{{ sqrt($muss[1])  }}</li>
    <li>{{ sqrt($muss[2])  }}</li>
    <li>{{ sqrt($muss[3])  }}</li>
    <li>{{ sqrt($muss[4])  }}</li>
    <li>{{ sqrt($muss[5])  }}</li>
    <li>{{ sqrt($muss[6])  }}</li>
    <li>{{ sqrt($muss[7])  }}</li>
    <li>{{ sqrt($muss[8])  }}</li>
   
 </ul>
@elseif (count($muss) ==  0)
	<p>сумма массивов ровно нулю</p>
@endif


 
</body>
</html>