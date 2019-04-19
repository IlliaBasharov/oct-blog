
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../css/Cabinet.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title></title>
    </head>
    <body>
        <header class="w3-light-grey">
            <form method="POST">
                <p id="logoTop"><?php echo $loginUser; ?> <input class="w3-button w3-teal" type="submit" name="cabinet_logOut" value="Выход" id="output"/> </p>
                <hr>
            </form>
        </header>
        <div id="cabinet_allNews" class="w3-container">
            <form method="POST" class="w3-container">
                <p>
                    <label id="myArt">Мои Статьи</label>
                    <a href="Views/newNews.php">
                        <input class="w3-button w3-teal addNews" type="button" name="cabinet_newNews" value="+" id="addNews" />
                    </a>  
                </p>
                <?php
                $db = new DataBase();
                $user = $db->getUser($loginUser);
                $news_array = $db->getNewsByLogin($loginUser);
                foreach ($news_array as $news):
                    $link = 'http://oct-blog/SingleNews.php?newsId=' . $news['id'];
                    ?>

                    <div class="w3-panel w3-pale-blue w3-leftbar w3-border-teal" id="title">
                        <a href='<?= $link . $news->newsId; ?>'
                           <h3><?= $news['name'] ?></h3>
                            <input class="w3-button w3-teal" type="submit"  value='x' id="delete"/>
                        </a>
                    </div>

                    <input type="hidden" name="deleteNewsId" value="<?= $news['id'] ?>"/>
                    <!--<input class="w3-button w3-teal" type="submit"  value='удалить'/>-->


                <?php endforeach; ?>
                <input class="w3-button w3-teal addNews" type="button" name="cabinet_newNews" value="+" id="addNews" />
            </form>
        </div>
        <div id="fisrtPage" class="w3-panel w3-pale-blue w3-leftbar w3-border-teal" >
           <form method="POST" class="w3-container w3-panel w3-pale-blue w3-leftbar w3-border-teal" id="formFirst">
                <h1 id="logoFirst">Привет, <?php echo $loginUser; ?>! </h1>
                <p><input class="w3-button w3-teal" type="submit" name="cabinet_logOut" value="Выход" id="outputFirst"/></p>
            </form> 
        </div>

    </body>
</html>