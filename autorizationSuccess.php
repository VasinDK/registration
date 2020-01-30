<?session_start();

/*Подключение БД*/
require 'include/connectDB.php'; 

/*Получаем данные из полей авторизации */
$login = $_POST['login'];
$pass = $_POST['pass'];

/*Находми поля из бд, по логину. Записываем их. В случае если поле логин и его пароль соответствуют полям логин и пароль пришедшим из формы авторизации */
$res = $mysqli -> query("SELECT login, password, name, surname, mail FROM users WHERE login = '$login'"); 
$row = $res->fetch_assoc();

    if(($row['password'] == $pass) && ($pass == true)){ 

        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['mail'] = $row['mail'];

        ?>

    <!--Вывод страницы пользователю в случае успешного прохождения авторизации-->
        <!DOCTYPE html>
        <html>
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <title>Авторизация пройдена</title>
        <body>
        <h1>Авторизация пройдена</h1>
        
        <p>Добро пожаловать: 
                        <?=$row['name'];?></p>

        <?require 'include/menu.php';?>  <!--меню-->
        </body>
        </html>

         <? } 

            else { ?>  

    <!--Вывод страницы пользователю в случае не успешного прохождения авторизации-->
        <title>Авторизация не пройдена</title> 
        <body>
        <h1>Пожалуйста, авторизируйтесь</h1>
        <p>Введен не верный логин / пароль. Зарегистрируйтесь или авторизруйтесь заново</p>
        
        <?require 'include/menu.php';?>  <!--меню-->
        </body>
        </html>
   
        <? }
        
 $mysqli -> close();?>



