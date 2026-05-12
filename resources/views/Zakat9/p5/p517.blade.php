 <!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p> ~ ~ Добро пожаловать в 17 задание ~ ~ </p>

   @if ($age < 18)
   <b>Вам меньше 18 лет, информация закрыта</b>, ``>.< <br> 
   @endif 
      @unless  ($age)
	      <b>вы еще не авторизованы<b>, meow meow 
      @endunless
</body>
</html>