<?  /*Главная страница*/
session_start();

?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Главная</title>

</head>

<body>
    
<h1>Здравствуйте
<?if($_SESSION['name']){echo ', ' . $_SESSION['name'];}?> <!--Вывод имени пользователя в случае авторизации-->
</h1>                                                   
<p>Вы находитесь на главной странице.</p>
<p>Задача по авторизации выполнена исходя из тех требований котрые были написаны в задании.</p>
<p>Можно предложить решение, с использованием jquery и ajax, <br>в части проверки занятости логина, но такой задачи не стояло</p>

<?require 'include/menu.php';?> <!--меню-->

</body>
</html>