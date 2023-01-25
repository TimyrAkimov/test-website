<?php
require_once "start.php";
$article = getArticle($_GET["id"]);
$id = $article["id"];
$title = $article["title"];
$full_text = $article["full_text"];
?>

<html lang="en">
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="styles.css">

<title>Статьи</title>

</head>

<body>

<?php
	require_once "blocks/top.php";
?>

<?php
	require_once "blocks/full_article.php";
?>

<?php
	require_once "blocks/banners_new.php";
?>


<?php
	require_once "blocks/footer.php";
?>

</body>
</html>