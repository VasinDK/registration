<? session_start()
;
/*Подключение БД*/
require 'include/conn_bd.php';

/*Проверка, если были изменения в полях формы изменения данных, то мы используем новые данные для внесения в бд. Если изменений небыло, то вносим в бд старые даные.
Ключем ко всем записям является id, полученый на предыдущем шаге, на странице изменения данных по логину.*/
$id = $_SESSION['id'];
if ($_POST['name']){$_SESSION['name'] = $_POST['name'];} 
$name = $_SESSION['name'];
if ($_POST['surname']){$_SESSION['surname'] = $_POST['surname'];} 
$surname = $_SESSION['surname'];
if ($_POST['login']){$_SESSION['login'] = $_POST['login'];} 
$login = $_SESSION['login'];
if ($_POST['email']){$_SESSION['email'] = $_POST['email'];} 
$email = $_SESSION['email'];
if ($_POST['pass']){$_SESSION['pass'] = $_POST['pass'];} 
$pass = $_SESSION['pass'];



/*Вносим данные в БД*/
$upd_bd = $mysqli->query("UPDATE users SET name = '$name', surname = '$surname', login = '$login', mail = '$email', password = '$pass' WHERE id = '$id'"); 

$mysqli -> close();
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Изменения</title>

</head>

<body>
    
<title>Изменения прошли успешны</title>
<h1>Изменения прошли успешны</h1>
<?require 'include/menu.php';?>     <!--меню-->

</body>
</html>

