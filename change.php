<?
session_start();

/*Подключение БД*/
require 'include/conn_bd.php';

$loginA = $_SESSION['login'];

/*Получение id по начальному логину до изменения*/
$id_db = $mysqli->query("SELECT * FROM users WHERE login = '$loginA'"); 
while($id_db_fa = $id_db->fetch_assoc()){
	$_SESSION['id'] = $id_db_fa['id'];  /*Передача id для дальнейшей работы */

}

$mysqli -> close();
?>

<!--Получение новых данных от пользователя с демонстрацией предыдущих в placeholder-->

<h1>Изменение даных</h1>
<form method = 'post' action = "okC.php">
    <p>Имя: </p><input type = "text" name = "name" placeholder = "<?=$_SESSION['name'];?>"><br>
    <p>Фамилия: </p><input type = "text" name = "surname" placeholder = "<?=$_SESSION['surname'];?>"><br>
    <p>Почта: </p><input type = "text" name = "email" placeholder = "<?=$_SESSION['email'];?>"><br>
    <p>Пароль: </p><input type = "text" name = "pass" placeholder = "Пароль"><br><br>
    
    <input type = "submit" value = "Изменить">
    
    
</form>


<?require 'include/menu.php';?>  <!--меню-->