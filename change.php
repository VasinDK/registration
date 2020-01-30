<?session_start();

/*Подключение БД*/
require 'include/connectDB.php';

$login = $_SESSION['login'];

/* Получение id по начальному логину до изменения */
$res = $mysqli->query("SELECT * FROM users WHERE login = '$login'"); 

while($row = $res->fetch_assoc()){
	$_SESSION['id'] = $row['id'];  /* Передача id для дальнейшей работы */
}

$mysqli -> close();
?>

<!--Получение новых данных от пользователя с демонстрацией предыдущих в placeholder-->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Изменение даных</title>

</head>

<body>

<h1>Изменение даных</h1>

<form method = 'post' action = "changeSuccess.php">

<p>Имя: </p>
<input type = "text" name = "name" placeholder = "<?=$_SESSION['name'];?>"><br>

<p>Фамилия: </p>
<input type = "text" name = "surname" placeholder = "<?=$_SESSION['surname'];?>"><br>

<p>Почта: </p>
<input type = "text" name = "mail" placeholder = "<?=$_SESSION['mail'];?>"><br>

<p>Пароль: </p>
<input type = "text" name = "pass" placeholder = "Пароль"><br><br>

<input type = "submit" value = "Изменить">
</form>

</body>
</html>

<?require 'include/menu.php';?>  <!--меню-->