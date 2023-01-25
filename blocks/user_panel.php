<div class="auth">
<img class="mini-items" src="images/cart.png" alt="" onclick="document.location='cart.php'">
Пользователь: <b><?php echo $_SESSION["email"];?> </b>
<button class="button_click" onclick="document.location='logout.php'">Выйти</button>
</div>