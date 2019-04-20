
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/Cabinet.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="../js/main.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>
        <header id="header" class="w3-light-grey">
            <form method="POST">
                <div class="onright logo"><?php echo $loginUser; ?> <input class="w3-button onright line w3-teal" type="submit" name="cabinet_logOut" value="Выход" id="output"/></div>
            </form>
        </header>
        <div id="cabinet_allNews" class="w3-container">
            <form method="POST" class="w3-container">

                <label id="myArt">Мои Статьи</label>
                <br/>
                <a href="Views/newNews.php">
                    <input class="w3-button w3-teal addNews" type="button" name="cabinet_newNews" value="+" id="addNews" />
                </a>  

                <?php
                $db = new DataBase();
                $user = $db->getUser($loginUser);
                $news_array = $db->getNewsByLogin($loginUser);
                foreach ($news_array as $news):
                    $link = 'http://oct-blog/SingleNews.php?newsId=' . $news['id'];
                    ?>

                    <div class="w3-panel w3-pale-blue w3-leftbar w3-border-teal" id="title">
                        <a href='<?= $link . $news->newsId; ?>'>
                           <h3><?= $news['name'] ?></h3>
                            <input class="w3-button w3-teal" type="submit"  value='x' id="delete"/>
                        </a>
                    </div>

                    <input type="hidden" name="deleteNewsId" value="<?= $news['id'] ?>"/>
                    <p>
                        
                        <?= $news['text'];?>
                    </p>
                    <!--<input class="w3-button w3-teal" type="submit"  value='удалить'/>-->


                <?php endforeach; ?>
                <a href="Views/newNews.php">
                    <input class="w3-button w3-teal addNews" type="button" name="cabinet_newNews" value="+" id="addNews" />
                </a>  
            </form>
        </div>
<!--        <div id="fisrtPage" class="w3-panel w3-pale-blue w3-leftbar w3-border-teal" >
            <form method="POST" class="w3-container w3-panel w3-pale-blue w3-leftbar w3-border-teal" id="formFirst">
                <h2 id="logoFirst">Привет, <?php //echo $loginUser; ?>! </h2>
                <input class="w3-button w3-teal" type="submit" name="cabinet_logOut" value="Выход" id="outputFirst"/>
            </form> 
        </div>-->

    </body>
</html>