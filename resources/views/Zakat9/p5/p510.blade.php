 <!DOCTYPE html>
<html>
<head>
</head>
<body>
  
 <p> ~ ~ Добро пожаловать ~ ~ </p>
     @foreach ($location as $key => $elem )
@if (isset($elem['city']))
 <p>  {{$elem['city']}} </p>  
@else
~ ~  Москва 
@endif

@if (isset($elem['country']))
<p>   {{$elem['country']}} </p>  
@else
~ ~  Россия
@endif
@endforeach

   
</body>
</html>