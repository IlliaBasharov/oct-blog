<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <button type="button" name="cabinet_showNews" value="<?php $loginUser; ?>"></button>
        <div id="cabinet_allNews" style="visibility: hidden">
            <form action="newNews.php">
                <?php
                foreach ($news as $value) {
                    echo $value;
                }
                ?>
                <input type="button" name="cabinet_newNews"/>
            </form>

            <form name="news_id" method="POST">
                <a href="singleNews.php">
                    <input type="button" name="name_news" value="<?php $nameNewsId; ?>"/>  
                </a>
                <a style="visibility: hidden">
                    <button name="delete_news"><img src="https://cdn.pixabay.com/photo/2012/04/13/00/21/button-31222_960_720.png" alt="Крестик" style="width: 12px"></button> 
                    <input type="hidden" name="deleteNewsId" value="<?php $nameNewsId; ?>"/>
                </a>
                <div>
                    <?php $textNewsId; ?>
                </div>

            </form>

            <form action="newNews.php">
                <input type="button" name="cabinet_newNews"/>
            </form>


        </div>
        <input type="submit" name="cabinet_logOut" value="Выход"/>
        
    </body>
</html>






