<? session_start();

/*Подключение БД*/
require 'include/conn_bd.php';

/*Получение значений из формы регистрации, для $_SESSION и лок переменных*/
$name = $_SESSION['name'] = $_POST['name'];
$surname = $_SESSION['surname'] = $_POST['surname'];
$login = $_SESSION['login'] = $_POST['login'];
$email = $_SESSION['email'] = $_POST['email'];
$pass = $_SESSION['pass'] = $_POST['pass'];
$hash = hash('md5', $email);

/*Сравниваем логин с логинами из БД. Если он есть то записываем его в переменную $login_Srav */
$id_db = $mysqli->query("SELECT * FROM users WHERE login = '$login'"); 
while($id_db_fa = $id_db->fetch_assoc()){
	$login_Srav = $id_db_fa['login'];
}

$mysqli -> close();

/*сравниваем логин который пришел из формы регистрации и возможно найденый логин в БД*/
if($login==$login_Srav){
    $_SESSION['message']='Логин занят. Выберите другой';?> /*если такой логин существует в БД, то формируем сообщение для доставки пользователю после переадресаци*/
    <script type="text/javascript"> window.location = "registration.php" </script>  /*Переадресация на форму регистраии в случае если логин уже есть в БД*/
    <?}

/*Вносим данные в БД*/
$mysqli->query("INSERT INTO `users` (`name`, `surname`, `login`, `mail`, `password`, `hash`, `conferm`) VALUES ('$name', '$surname', '$login', '$email', '$pass', '$hash', 0)"); 

$mysqli -> close();
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Регистрация</title>

</head>

<body>
    
<title>Регистрация пройдена</title>
<h1>Регистрация пройдена</h1>

<?require 'include/menu.php';?>  <!--Подключаем меню-->

</body>
</html>

