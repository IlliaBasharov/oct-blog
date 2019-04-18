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
    </head>
    <body>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
            <div id="main">
                <form method="POST" enctype="multipart/form-data">
                    <h2>Создать новость</h2>
                    <input type="text" name="title" maxlength="255" placeholder="заголовок" required/>
                    <input type="text" name="content" placeholder="текст" required/>
                    <input type="date" name="date" placeholder="дата создания"/>
                    <input type="file" multiple name="document[]"/>
                    <input type="submit" value="Загрузить" name="upload"/>

                </form>
                <p><?php
            $newNews->fileValidator();
            echo $newNews->error_message
            ?></p>
            </div>
        <?php endif; ?>
    </body>
</html>


