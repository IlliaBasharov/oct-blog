
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/Cabinet.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title></title>
    </head>
    <body>
        <header>
	<form method="POST">
		<p id="logoTop"><?php echo $loginUser; ?> <input class="w3-button w3-teal" type="submit" name="cabinet_logOut" value="Выход" id="output"/> </p>
                <hr>
        </form>
        </header>
                <div id="cabinet_allNews" class="w3-container">
		<?php
		$db = new DataBase();
		$user = $db->getUser($loginUser);
		$news_array = $db->getNewsByLogin($loginUser);
		foreach ($news_array as $news):
		    $link = 'http://oct-blog/SingleNews.php?newsId=' . $news['id'];
		    ?>
                <h2 id="myArt">Мои Статьи</h2>
                <form method="POST" class="w3-container">
                    <a href="Views/newNews.php">
			<input class="w3-button w3-teal addNews" type="button" name="cabinet_newNews" value="+" id="addNews" />
		    </a>  
                 <div class="w3-panel w3-pale-blue w3-leftbar w3-border-teal" id="title">
                    <a href='<?= $link . $news->newsId; ?>'
                        <h3><?= $news['name'] ?></h3>
                         <input class="w3-button w3-teal" type="submit"  value='удалить'/>
			</a>
</div>
		    <input type="hidden" name="deleteNewsId" value="<?= $news['id'] ?>"/>
		    <!--<input class="w3-button w3-teal" type="submit"  value='удалить'/>-->
			</form>
                
		<?php endforeach; ?>
                        </form>

	    </div>
            
    </body>
</html>