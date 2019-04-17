<?php

$db = new DataBase(); 

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    $deleteNewsId  = POST["deleteNewsId"];
    if(!empty($deleteNewsId)){
        $db->deletNews($deleteNewsId);
    } else {
        $user=new User();
        $user->logout();
    }
} else if ($method === 'GET') {
    $news = $db->getNewsByLogin($loginUser);
    include_once 'Views' . DIRECTORY_SEPARATOR . 'Cabinet.php';
}