<!DOCTYPE html>
<html>
<head>
</head>
<body>
   // Задание 7 
      
    <p> @foreach ($users as $user)  
    <p>
{{ $user['name'] }} {{ $user['age'] }} {{ $user['salary'] }}
	    @endforeach
    </p>
    </p>
  
</body>
</html>