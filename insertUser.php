<?session_start();

/*Подключение БД*/
require 'include/connectDB.php';


/*Получение значений из формы регистрации, для $_SESSION и лок переменных*/

$name = $_SESSION['name'] = $_POST['name'];
$surname = $_SESSION['surname'] = $_POST['surname'];
$login = $_SESSION['login'] = $_POST['login'];
$mail = $_SESSION['mail'] = $_POST['mail'];
$pass = $_SESSION['pass'] = $_POST['pass'];
$hash = hash('md5', $mail);

$loginDB = $mailDB = '1';

/*Сравниваем логин с логинами из БД. Если он есть то записываем его в переменную $login_Srav */

$res = $mysqli->query("SELECT * FROM users WHERE login = '$login'"); 

while($row = $res->fetch_assoc()){
	$loginDB = $row['login'];  /* Логин найденый в бд */
}

$res = $mysqli->query("SELECT * FROM users WHERE mail = '$mail'"); 
while($row = $res->fetch_assoc()){
	$mailDB = $row['mail'];  /* e-mail найденый в бд */
}

/* сравниваем логин из формы регистрации и возможно найденый в БД */
if($login===$loginDB){
    echo '1'; // Если логин занят. Возвращаем ответ 1 на страницу регистрации
    $loginRes = 1;
    session_unset();
    } else
    $loginRes = 0;

if($mail===$mailDB){
    echo '2'; // Если  e-mail уже зарегистрирован. Возвращаем ответ 2 на страницу регистрации;
    $mailRes = 1;
    session_unset();
    } else 
    $mailRes = 0;

    /*Вносим данные в БД*/
if(($mailRes === 0) && ($loginRes === 0)){

	$mysqli->query("INSERT INTO users (`name`, `surname`, `login`, `mail`, `password`, `hash`, `conferm`) VALUES ('$name', '$surname', '$login', '$mail', '$pass', '$hash', 0)");
	echo '5';  /* После регистрации возвращаем ответ 5 на страницу регистрации */
	
	}

$mysqli -> close();
?>

