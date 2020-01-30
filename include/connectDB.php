<?
/* Подключение к базе данных */
$server = 'localhost';          // адрес сервера
$userDB = 'root';    			//пользователь БД
$passDB = '';         			//пароль БД
$database  = 'boss11_test';   	//Бада данных
$tableDB = 'users';              //таблица пользователе БД


$mysqli = new mysqli($server, $userDB, $passDB, $database); 
$mysqli -> set_charset('utf8');

/* проверка соединения */ 
if ($mysqli->connect_error) { 
    die('Ошибка при подключении: ' . $mysqli->connect_error);
}

?>