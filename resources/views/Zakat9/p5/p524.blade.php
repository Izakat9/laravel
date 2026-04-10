 <!DOCTYPE html>
<html>
<head>
</head>
<body> 
    <p> ~ ~ Добро пожаловать в 24 задание ~ ~ </p>
<ul>
@foreach ( $muss as $ss)
@if ( $ss % 2 === 0)
		<li>{{$ss}} </li>
@endif
@endforeach
</ul>

</body>
</html>