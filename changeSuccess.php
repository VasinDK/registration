<?session_start();

/*Подключение БД*/
require 'include/connectDB.php';

/*Проверка, если были изменения в полях формы, то мы используем новые данные для внесения в бд. Если изменений небыло, то вносим в бд старые даные.
Ключем ко всем записям является id, полученый на предыдущем шаге, на странице изменения данных по логину.*/

/* Если со страницы "изменения данных" пришли изменения в $_POST['..'], то их передаем в массив $_SESSION['..'], если изменения не пришли, то $_SESSION['..'] оставляем прежним. Далее передаем значение $_SESSION['..'] доноименной ($key) переменной  */

$id = $_SESSION['id'];

if ($_POST['name']){
	$_SESSION['name'] = $_POST['name'];
} 
$name = $_SESSION['name'];

if ($_POST['surname']){
	$_SESSION['surname'] = $_POST['surname'];
} 
$surname = $_SESSION['surname'];

if ($_POST['login']){
	$_SESSION['login'] = $_POST['login'];
} 
$login = $_SESSION['login'];

if ($_POST['mail']){
	$_SESSION['mail'] = $_POST['mail'];
} 
$mail = $_SESSION['mail'];

if ($_POST['pass']){
	$_SESSION['pass'] = $_POST['pass'];
} 
$pass = $_SESSION['pass'];


/*Вносим данные в БД*/
$res = $mysqli->query("UPDATE users SET name = '$name', surname = '$surname', login = '$login', mail = '$mail', password = '$pass' WHERE id = '$id'"); 

$mysqli -> close();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Изменения прошли успешны</title>

</head>

<body>
    
<h1>Изменения успешно прошли</h1>
<?require 'include/menu.php';?>     <!--меню-->

</body>
</html>

