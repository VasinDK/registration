<?session_start();?>
<!--Форма регистрации-->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<title>Регистрация</title>

</head>

<body>
    <!--В случае занятости логина или емаил, появляется сообщение на странице и освободится  $_SESSION-->

<script>
	function funBefor(){
		$('#messageRegistrError').text('подождите ..');
	}
	function funSuccess(resultChek){
		$('#messageRegistrError').text(resultChek);
		if(resultChek == 1){ 	// 1 -  Этот логин уже занят
			$('#messageRegistrError').text('Этот логин уже занят');
		}

		if(resultChek == 2){ 	// 2 -  Этот е-маил уже зарегистрирован
			$('#messageRegistrError').text('Этот е-маил уже зарегистрирован');
		}

		if(resultChek == 12){ 	// 12 -  Этот логин и е-маил уже заняты
			$('#messageRegistrError').text('Этот логин и е-маил уже заняты');
		}

		if(resultChek == 5){ 	// 5 -  Регистрация прошла успешно. Переадресация на страницу уведомления
			$('#messageRegistrError').text('Успешно');
			window.location = "registrSucMessage.php";
		}
	
		
	}
	$(document).ready (function(){
		$('#button').on('click', function(){
			var login = $('#login').val();
			var name = $('#name').val();
			var surname = $('#surname').val();
			var pass = $('#pass').val();
			var mail = $('#mail').val();
			$.ajax({
				url: 'insertUser.php',
				type: 'POST',
				data: ({name: name, surname: surname, pass: pass, login: login, mail: mail}),
				dataType: 'html',
				beforeSend: funBefor,
				success: funSuccess
			});

		});
		
	});


</script>

<h1>Регистрация</h1> 
<div id="messageRegistrError"></div>
<form method="post" action="insertUser.php">
	
<input type = "text" id="name" name="name" value = "" placeholder="Имя"><br>
<input type = "text" id="surname" name="surname" value = "" placeholder="Фамилия"><br>
<input required type = "text" id="login" name = "login" value = ""  placeholder = "логин"><br>
<input required type = "text" id="pass" name="pass" value = ""  placeholder="Пароль"><br>
<input required  type = "text" id="mail" name="mail" value = ""  placeholder="E-mail"><br>
</form>
<button type="button" id="button">Зарегистрироваться</button>

<?require 'include/menu.php';?> <!--Подключение меню-->



</body>
</html>