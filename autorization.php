<?php
include_once 'includes'.DIRECTORY_SEPARATOR.'sessionStart.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
include_once 'views'.DIRECTORY_SEPARATOR.'Autorization.php';
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = filter_input(INPUT_POST, 'login');
    $pass = filter_input(INPUT_POST, 'password');


    include_once 'Application' . DIRECTORY_SEPARATOR . 'DataBase.php';


    $db = new DataBase();
    $user = $db->getUser($login);
    if ($login != $user->login) {
        echo 'Invalid Login or Password!';
      include_once 'views'.DIRECTORY_SEPARATOR.'Autorization.php';
    } else {
        if (password_verify($pass, $user->pass)) {
            $_SESSION['loginUser'] = $login;
            header("Location: index.php");
        } else {
             echo 'Invalid Login or Password!';
      include_once 'views'.DIRECTORY_SEPARATOR.'Autorization.php'; 
        }
    }
}
