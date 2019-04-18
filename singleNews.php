<?php
include_once 'includes/Autoload.php';
if (isset($_GET['newsId'])) {
    if (!empty($_GET["newsId"])) {
        //добавлена след. строка
        $id = $_GET["newsId"];
        $db = new DataBase();
        $news = $db->getNewsById($id);
        if ($_GET['newsId'] === $news['id']) {
            $view = '<form method="post" action="/index/">.<h2>' . $news['name'] . '</h2><p>' . $news['text'] . '</p>' .
                    '<img src="' . $news['photo'] . '" /></br>'.
                    '<input type="submit" value="К новостям" /> </form>';           
        } else {
            $view = '<form method="post" action="/index/">'
            . 'Такой новости не существует</br>'.
            '<input type="submit" value="К новостям" /> </form>';        
        }
    } else {
        $view = '<form method="post" action="/index/">'
        . 'Извините, возникла проблема в работе сайта.</br>'.
        '<input type="submit" value="К новостям" /> </form>';     
    }  
    include_once 'Views/SingleNews.php';
}

