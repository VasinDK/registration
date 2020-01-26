/*Страница используемая для выхода (разлогинивания) и окончания сессий*/
<?
session_start();

    session_unset(); // освобождение переменных сессии
    session_destroy(); // закрытие сессии
?>
 <script type="text/javascript"> window.location = "/" </script> /*Переадресация на главную страницу после разлогинивания*/
 
/*echo $_SERVER['HTTP_REFERER']; */


