<?php

include_once 'includes/Autoload.php';

if (isset($_GET['newsId'])) {
    if (!empty($_GET["newsId"])) {
        $news_arr = new DataBase();
        $news = $news_arr->getNewsById($id);
        if ($_GET['newsId'] === $news['id']) {
            $view = '<h2>' . $news['name'] . '</h2><p>' . $news['text'] . '</p>' .
                    '<img src="image.php?id=' . $news['photo'] . '" />';
            echo $view;
        } else {
            echo 'Такой новости не существует';
        }
    } else {
        echo 'Извините, возникла проблема в работе сайта.';
    }
}