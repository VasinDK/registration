<!--Форма авторизации-->

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Авторизация</title>

</head>

<body>
    
<h1>Авторизация</h1>

<form method = "post" action = "autorizationSuccess.php">
<input type = "text" name = "login" placeholder = "Логин"><br>
<input type = "text" name = "pass" placeholder = "Пароль"><br><br>
<input type = "submit" value = "Вход">
</form>

<?require 'include/menu.php';?>  <!--Добавляем меню-->

</body>
</html>