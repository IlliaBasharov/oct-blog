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
                ?>
                <a href='<?= $link ?>.$link = "Views" . DIRECTORY_SEPARATOR . "SingleNews.php".$link.getNewsId = <?= $news[id] ?>;'>
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
        <input type="submit" name="cabinet_logOut" value="Выход" id="output" form="allNewsUser"/>
    </body>
</html>