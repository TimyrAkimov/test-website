<?php
if ($_SESSION["error_auth"]){
	unset ($_SESSION["error_auth"]);
	$alert="Неверно введён e-mail или пароль!";
	include "alert.php";
	}
?>	

<div class="auth">

<form action="auth.php" name="auth" method="post">

E-mail: <input required placeholder="Укажите e-mail" type="email" name="email" />

Пароль: <input required placeholder="Укажите пароль" type="password" name="password" />

<input class="button_click" type="submit" name="button_auth" value="Войти" />

</form>

</div>