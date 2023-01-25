<div class="list_articles">
<h1 align="center">Все статьи:</h1>

<?php
$articles = getAllArticles();
for ($i=0; $i<count($articles); $i++) {
	$id=$articles[$i]["id"];
	$title=$articles[$i]["title"];
	$intro_text=$articles[$i]["intro_text"];
	include "intro_article.php";
}
?>
<p></p>
<button class="button_click" onclick="document.location='index.php'">Вернуться на главную</button>
</div>

