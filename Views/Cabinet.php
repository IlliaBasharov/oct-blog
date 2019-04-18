<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/Cabinet.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <button type="button" name="cabinet_showNews" id="log">
            <?php echo $loginUser; ?>
        </button>
        <div id="cabinet_allNews">
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
                $link = 'http://oct-blog/SingleNews.php?newsId='.$news[id];
                ?>
                <a href='<?= $link.$news->newsId; ?>'>

                    <button type="button" name="delete_news" id="del">
                        <img src="Views/images/Del.jpg" alt="delete" class="del"/>
                        <input type="hidden" name="deleteNewsId" value="<?= $news[id] ?>"/>
                    </button>
                    <h3><?= $news['name'] ?></h3>
                </a>
                <p><?= $news['text'] ?></p>
            <?php endforeach; ?>
            <p>
                <a href="Views/newNews.php">
                    <input type="button" name="cabinet_newNews" value="Добавить новость" class="addNews"/>
                </a>
            </p>
        </div>
        <form method="POST" >
            <input type="submit" name="cabinet_logOut" value="Выход" id="output"/>
        </form>
         <?php include_once 'Views/Footer.php'; ?> 
    </body>
</html>