<?php
include_once '../config_example.php';
include_once '../newNews.php';
$newNews = new newNews();
echo $newNews->fileValidator();



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add news</title>
        <meta charset="UTF-8">
         <link href="../css/smirnov.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="main">

            <form method="POST" enctype="multipart/form-data">
                <h2>Создать новость</h2>
                <input type="text" name="title" placeholder="заголовок" required/>
                <input type="text" name="content" placeholder="текст" required/>
                <input type="datetime-local" name="date" placeholder="дата создания"/>
                <input type="file" multiple name="document[]"/>
                <input type="submit" value="Загрузить" name="upload"/>
            </form>
           
        </div>
    </body>
</html>


