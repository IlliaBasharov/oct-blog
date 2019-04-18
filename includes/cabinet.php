<?php

$db = new DataBase();

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    $deleteNewsId = $_POST['deleteNewsId'];
    if (!empty($deleteNewsId)) {
        $db = new DataBase();
        $db->deletNews($deleteNewsId);
    } else if(!empty($_POST['cabinet_logOut'])){
        $user = new User();
        $user->logout();
        header('Location: http://oct-blog/index.php');
    }
} else if ($method === 'GET') {
    $news = $db->getNewsByLogin($loginUser);
    include_once 'Views' . DIRECTORY_SEPARATOR . 'Cabinet.php';
}