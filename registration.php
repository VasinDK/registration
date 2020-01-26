<!--Форма регистрации-->
<?session_start();?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Регистрация</title>

</head>

<body>
    <!--В случае появления сообщения о занятости логина, сообщение появляется на странице и освобождает массив $_SESSION-->
<? if($_SESSION['message']!='0'){
    echo $_SESSION['message'];
    session_unset();
    }
?>
<h1>Регистрация</h1> 
<form method="post" action="okR.php">
<input type = "text" name="name" placeholder="Имя"><br>
<input type = "text" name="surname" placeholder="Фамилия"><br>
<input required type = "text" name = "login" placeholder = "логин"><br>
<input required type = "text" name="pass" placeholder="Пароль"><br>
<input required  type = "text"  name="email" placeholder="E-mail"><br><br>
<input type = "submit" value = "отравить">
</form>

<?require 'include/menu.php';?> <!--Подключение меню-->

</body>
</html>