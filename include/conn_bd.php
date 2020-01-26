<?
$server = 'localhost';          // адрес сервера
$userBD = 'boss11_test';     //пользователь БД
$passBD = 'testtest';         //пароль БД
$database  = 'boss11_test';   //Бада данных
$tablBD = 'users';              //таблица пользователе БД


$mysqli = new mysqli($server, $userBD, $passBD, $database); 
$mysqli -> set_charset('utf8');

/* проверка соединения */ 
if ($mysqli->connect_error) { 
    die('Ошибка при подключении: ' . $mysqli->connect_error);
}

?>