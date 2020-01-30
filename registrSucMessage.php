<?session_start();?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Регистрация успешна</title>
</head>
<body>

<h1>Регистрация пройдена</h1>
<p>
	<? echo $_SESSION['name'];?>
							 ,регистрация успешно пройдена </p>

<?require 'include/menu.php';?> <!--меню-->							 

</body>
</html>