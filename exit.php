<?session_start();
/*Страница используемая для выхода (разлогинивания) и окончания сессий*/

    session_unset(); // освобождение переменных сессии
    session_destroy(); // закрытие сессии
?>
 <script type="text/javascript"> window.location = "/" </script> 



