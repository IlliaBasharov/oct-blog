<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php?>
        <button type="button" name="cabinet_showNews" value="<?php $loginUser; ?>"></button>
        <div id="cabinet_allNews" style="visibility: hidden">
            <form action="newNews.php">
                <?php
                foreach ($news_array as $news) {
                    echo $news;
                }
                ?>
                <input type="button" name="cabinet_newNews"/>
            </form>
            <form name="news_id" method="POST">
                <a href="singleNews.php">
                    <input type="button" name="name_news" value="<?php $nameNewsId; ?>"/>  
                </a>
                <a>
                    <button name="delete_news"><img src="https://st3.depositphotos.com/1030956/12571/v/450/depositphotos_125715578-stock-illustration-brushed-x-sign.jpg" alt="Крестик" style="width: 10px;margin: 0;padding: 0"></button> 
                    <input type="hidden" name="deleteNewsId" value="<?php $nameNewsId; ?>"/>
                </a>
                <div>
                    <p><?= $news['text'] ?></p>
                </div>
            </form>
            <form action="newNews.php">
                <input type="button" name="cabinet_newNews"/>
            </form>
        </div>
        <input type="submit" name="cabinet_logOut" value="Выход"/>
    </body>
</html>






