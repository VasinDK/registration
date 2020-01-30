<?session_start();
 /*Главная страница.*/
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<title>Главная</title>

</head>

<body>

    <!--Вывод имени пользователя в случае авторизации-->

<h1>Здравствуйте

<?if($_SESSION['name']){
	echo ', ' . $_SESSION['name'];
}?> 
</h1>   

<p>Вы находитесь на главной странице.</p>
<p>Задача по авторизации выполнена с использованием php, jquery -> ajax, в части проверки занятости логина</p>

<?require 'include/menu.php';?> <!--меню-->

</body>
</html>	
