<?php
include_once 'includes'.DIRECTORY_SEPARATOR.'sessionStart.php';
include_once 'includes'.DIRECTORY_SEPARATOR.'Autoload.php';
if (!empty($_GET["newsId"])) {
    //добавлена след. строка
    $id = $_GET["newsId"];
    $db = new DataBase();
    $news = $db->getNewsById($id);
    if ($_GET['newsId'] === $news['id']) {
        $view = '<form class="w3-panel w3-pale-blue w3-leftbar w3-rightbar w3-border-teal" action="/index.php" >.<h2>' . $news['name'] .
                '</h2>' . '<img class="center-img"  src="..'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR . $news['photo'] . '" />' .
                '<p class="w3-text-black">' .
                $news['text'] . '</p>' .
                '<input type="submit" value="К новостям" class="w3-button w3-teal" onclick="document.getElementById("id01").style.display="block""/> </form>';
    } else {
        $view = '<form action="/index.php" class="w3-panel w3-pale-blue w3-leftbar w3-rightbar w3-border-teal">' . '<p class="w3-text-black">'
                . 'Такой новости не существует</br>' . '</p>' .
                '<input type="submit" value="К новостям" class="w3-button w3-blue" onclick="document.getElementById("id01").style.display="block""/> </form>';
    }
} else {
    $view = '<form action="/index.php" class="w3-panel w3-pale-blue w3-leftbar w3-rightbar w3-border-teal">' . '<p class="w3-text-black">'
            . 'Извините, возникла проблема в работе сайта.</br>' . '<p>' .
            '<input type="submit" value="К новостям" class="w3-button w3-blue" onclick="document.getElementById("id01").style.display="block""/> </form>';
}
include_once 'Views'.DIRECTORY_SEPARATOR.'SingleNews.php';

