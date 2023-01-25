<div class="header">

<h1 align="center">Adidas Originals <sup>&copy;</sup> New Collection</h1>

<p align="center">

<img class="main_img" src="images/adidas-2005.jpg" alt ="Главное фото"/>
 
<nav class="navbar">

<hr />

<div class="topmenu">

<img class="mini-items" src="images/logo.png" alt="" onclick="document.location='index.php'">

<a href ="index.php">Главная</a>

<a href ="registration.html">Акции</a>

<a href ="reviews.html">Отзывы</a>

<a href ="about-us.html">О нас</a>


</div>

<?php
if (checkUser($_SESSION["email"],$_SESSION["password"]))
	require_once "blocks/user_panel.php";
else require_once "blocks/auth_form.php";
?>

<hr />

</nav>

</div>
