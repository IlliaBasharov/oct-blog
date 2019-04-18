<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/Cabinet.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <form id="allNewsUser">
            <button type="button" name="cabinet_showNews" id="log">
                <?php echo $loginUser; ?>
            </button>
            <div id="cabinet_allNews">
                <p>
                    <a href="Views/newNews.php">
                        <input type="button" name="cabinet_newNews" value="Добавить новость" class="addNews"/>
                    </a>  
                </p>
                <!--            TODO пункт 2-->
                <form name="news_id" method="POST">
                    <?php
                    $db = new DataBase();
                    $user = $db->getUser($loginUser); //
                    $news_array = $db->getNewsByLogin($loginUser);
                    $link = 'Views' . DIRECTORY_SEPARATOR . 'SingleNews.php';
                    foreach ($news_array as $news):
                        ?>
                        <a href='<?= $link ?>'>
                            <h3><?= $news['name'] ?></h3>
                            <p><?= $news['text'] ?></p>
                        </a>
                    <?php endforeach; ?>
                </form>
                <p>
                    <a href="Views/newNews.php">
                        <input type="button" name="cabinet_newNews" value="Добавить новость" class="addNews"/>
                    </a>
                </p>
            </div>
        </form>
        <form method="POST">
            <input type="submit" name="cabinet_logOut" formmethod="post" value="Выход" id="output"/>
        </form>
    </body>
</html>
