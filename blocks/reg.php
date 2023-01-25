<h2 align="center">Здравствуйте! Похоже,вы у нас впервые) Пожалуйста,создайте учетную запись и затем авторизируйтесь.<p>
Если у вас уже есть учетная запись,то войдите.</p></h2>
<div class="outer-block">
<div class="registration">
<h2 align="left">Регистрация:</h2>
<form name="reg" action="" method="POST">
<table>
<tr>
<?php
	if (!empty($_POST["button_reg"])) {
			$email=htmlspecialchars($_POST["email"]);
			$password_1=htmlspecialchars($_POST["password_1"]);
			$password_2=htmlspecialchars($_POST["password_2"]);
			if (strlen($email)<3) $success=false;
				elseif (strlen($password_1) <3) $success=false;
				elseif ($password_1 != $password_2) $success=false;
				else $success=addUser($email,md5($password_1));
			if (!$success) $alert="Ошибка при регистрации пользователя!";
				else $alert="Вы успешно зарегистрировались!";
			include "alert.php";
			
		}
?>

<td>E-mail:</td>
<td>
<input required type="text" name="email" />
</td>
</tr>
<tr>
<td>Пароль:</td>
<td>
<input required type="password" name="password_1" />
</td>
</tr>
<tr>
<td>Подтвердите пароль:</td>
<td>
<input type="password" name="password_2" /></p>
</td>
</tr>
</table>
<p>
<input align="center" class="button_click" type="submit" name="button_reg" value="Зарегестрироваться" />
</p>
</form>
</div>
</div>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>