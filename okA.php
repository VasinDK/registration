
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<? session_start();

/*Подключение БД*/
require 'include/conn_bd.php'; 

/*Получаем данные из полей авторизации */
$login = $_POST['loginA'];
$pass = $_POST['passA'];

/*Находми поля из бд, по логину. Записываем их в случае если поле логин и его пароль соответствуют полям логин и пароль пришедшим из формы авторизации */
$loginUser = $mysqli -> query("SELECT login, password, name, surname, mail FROM users WHERE login = '$login'"); 
$userAu = $loginUser->fetch_assoc();
    if(($userAu['password'] == $pass) && ($pass == true)){ 
        $_SESSION['name'] = $userAu['name'];
        $_SESSION['surname'] = $userAu['surname'];
        $_SESSION['login'] = $userAu['login'];
        $_SESSION['mail'] = $userAu['mail'];
        $_SESSION['password'] = $userAu['password'];
        ?>
        <title>Авторизация пройдена</title>
        <body>
        <h1>Авторизация пройдена</h1> <!--Вывод страницы пользователю в случае успешного прохождения авторизации-->
        
        <p>Добро пожаловать: <?=$userAu['name'];?></p>
        <?require 'include/menu.php';?>  <!--меню-->
        </body>
        </html>

    
         <?} else{ ?>  
    
        <title>Авторизация не пройдена</title> <!--Вывод страницы пользователю в случае не успешного прохождения авторизации-->
        <body>
        <h1>Пожалуйста, авторизируйтесь</h1>
        <p>Введен не верный логин / пароль. Зарегистрируйтесь или авторизруйтесь заново</p>
        
        <?require 'include/menu.php';?>  <!--меню-->
        </body>
        </html>
   
        <? }
 $mysqli -> close();?>



