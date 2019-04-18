
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/Cabinet.css" rel="stylesheet" type="text/css"/>
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title></title>
    </head>
    <body>
	<form method="POST">
	    
		<p><?php echo $loginUser; ?></p>
                <hr>
	    
	    <div id="cabinet_allNews">
		<img alt="user" src="http://s1.iconbird.com/ico/2013/9/450/w256h2561380453931User256x25632.png"/>
                <p>
		    <a href="Views/newNews.php">
			<input type="button" name="cabinet_newNews" value="Добавить новость" class="addNews"/>
		    </a>  
		</p>
		<?php
		$db = new DataBase();
		$user = $db->getUser($loginUser);
		$news_array = $db->getNewsByLogin($loginUser);
		foreach ($news_array as $news):
		    $link = 'http://oct-blog/SingleNews.php?newsId=' . $news['id'];
		    ?>
               
                <h2>Мои Статьи</h2>
                <form method="POST" class="w3-container">
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
		<p>
		    <a href="Views/newNews.php">
			<input type="button" name="cabinet_newNews" value="Добавить новость" class="addNews"/>
		    </a>
		</p>
	    </div>
            <input type="submit" name="cabinet_logOut" value="Выход" id="output"/>
        </form>
    </body>
</html>