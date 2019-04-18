<?php
include_once 'includes/Autoload.php';
if (isset($_GET['newsId'])) {
    if (!empty($_GET["newsId"])) {
        //добавлена след. строка
        $id = $_GET["newsId"];
        $db = new DataBase();
        $news = $db->getNewsById($id);
        if ($_GET['newsId'] === $news['id']) {
            $view = '<form class="w3-container w3-pale-blue"" method="post" action="/index.php" >.<h2>' . $news['name'] . 
                    '</h2>'.'<p class="center-img"><img class="rightimg" src="' . $news['photo'] . '" /></p>'.
                    '<p class="w3-text-black">' .
                    $news['text'] . '</p>' .
                    '<input type="submit" value="К новостям" class="w3-button w3-blue" onclick="document.getElementById("id01").style.display="block""/> </form>';           
        } else {
            $view = '<form method="post" action="/index.php" class="w3-container">'.'<p class="w3-text-black">' 
            . 'Такой новости не существует</br>'.'</p>'.
            '<input type="submit" value="К новостям" class="w3-button w3-blue" onclick="document.getElementById("id01").style.display="block""/> </form>';        
        }
    } else {
        $view = '<form method="post" action="/index.php" class="w3-container">'.'<p class="w3-text-black">' 
        . 'Извините, возникла проблема в работе сайта.</br>'.'<p>'.
        '<input type="submit" value="К новостям" class="w3-button w3-blue" onclick="document.getElementById("id01").style.display="block""/> </form>';     
    }  
    include_once 'Views/SingleNews.php';
}

