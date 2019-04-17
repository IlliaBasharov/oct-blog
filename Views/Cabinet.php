<?php if (0 === 1) { ?>﻿
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <?php ?>
            <button type="button" name="cabinet_showNews"><?= $loginUser ?></button>
            <div id="cabinet_allNews" style=""> <!--visibility: hidden-->//TODO
                <form action="newNews.php">
                    <?php
//                foreach ($news as $value) {
//                    echo $value;
//                }
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
                        <input type="submit"
                        <?php var_dump($news); ?>
                    </div>

                </form>

                <form action="newNews.php">
                    <input type="button" name="cabinet_newNews"/>
                </form>


            </div>
            <input type="submit" name="cabinet_logOut" value="Выход"/>

        </body>
    </html>
<?php } else { ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <button type="button" name="cabinet_showNews"><?= $loginUser ?></button>
            <div id = cabinet_allNews>
                <?php
                foreach ($news as $news_one) {
                    
                }
                ?>
            </div>
        </body>
    </html>

<?php } ?>







