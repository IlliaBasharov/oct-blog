<?php
include_once '..' . DIRECTORY_SEPARATOR . 'newNews.php';

$newNews = new newNews();
$newNews->fileValidator();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add news</title>
        <meta charset="UTF-8">
        <link href="../css/smirnov.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/Footer.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
            
        <div id="main" class="w3-card-4">
            <div class="w3-container w3-teal">
                <h2>Создать статью</h2>
            </div>
                <form method="POST" enctype="multipart/form-data" w3-container>
                    <p>
                    <label class="w3-text-teal"><b>Заголовок</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="text" name="title" maxlength="255" placeholder="заголовок" required/>
                    </p>
                    <p>
                    <label class="w3-text-teal"><b>Текст</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="text" name="content" placeholder="текст" required/>
                    </p>
                    <p>
                    <label class="w3-text-teal"><b>Дата создания</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="date" name="date" placeholder="дата создания"/>
                    </p>
                    <p>
                    <input class="w3-input w3-border w3-light-grey" type="file" multiple name="document[]"/>
                    </p>
                    <p>
                    <input class="w3-btn w3-blue-grey" type="submit" value="Загрузить" name="upload"/>
                    </p>
                </form>
                </div>
                <p><?php
            $newNews->fileValidator();
            echo $newNews->error_message
            ?></p>
            
        <?php endif; ?>
    </body>
</html>


