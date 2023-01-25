<div class="comments">
<h2 align="left">Комментарии:</h2>
<div>
<?php
if (!empty($_POST["button_guestbook"])) {
	    $name=htmlspecialchars($_POST["name"]);
	    $comment=htmlspecialchars($_POST["comment"]);
	    if ((strlen($name)<3)||(strlen($comment)<3)) $success=false;
	    else $success=addGuestBookComment($name,$comment);
	    if(!success){
		   $alert="Ошибка при добавлении комментария!";
		   include "alert.php";
	    }
    }

    $comments=getAllGuestBookComments();
    for ($i=0;$i<count($comments); $i++){
	    $name=$comments[$i]["name"];
	    $comment=$comments[$i]["comment"];
	    include "blocks/guestbook_comment.php";
    }	
?>
</div>
<h2 align="left">Добавить комментарий:</h2>
<form name="guestbook" action="" method="post">
 Укажите имя  : <input required type="text" name="name" />
<p>Ваше мнение: <input  required type="text" name="comment" /></p>
<p></p>
<input class="button_click" type="submit" name="button_guestbook" value="Подтвердить" />
</form>
<p></p>
<a class="blackstyle" href="articles.php">Вернуться назад</a>
</div>
 
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

