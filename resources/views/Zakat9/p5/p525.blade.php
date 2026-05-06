 <!DOCTYPE html>
<html>
<head>
</head>
<body> 
    <p> ~ ~ Добро пожаловать в 25 задание ~ ~ </p>

@if (is_array($data) )
<ul>
@foreach ( $data as $ss )
		<li>{{$ss}}</li>
@endforeach
</ul>
@else 
<p>{{$data}}</P>
    
@endif


</body>
</html>