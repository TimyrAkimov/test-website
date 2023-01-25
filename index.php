<?php
require_once "start.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="styles.css">

<title>ПИН/б-20-1-о | Акимов Т.С.</title>

</head>

<body>

<?php
	require_once "blocks/top.php";
?>

<?php
if (checkUser($_SESSION["email"],$_SESSION["password"]))
	require_once "blocks/content.php";
else require_once "blocks/reg.php";
?>

<?php
	require_once "blocks/footer.php";
?>

</body>
</html>

