<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/autorization.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <?php
        include_once 'views/Autorization.php';
        ?>
    </body>
</html>

<?php
$login = filter_input(INPUT_POST, 'login');
$pass = filter_input(INPUT_POST, 'password');


include_once 'Application/DataBase.php';

$db = new DataBase();
if (!$user = $db->getUser($login)) {
    echo 'Invalid Login!';
} else {
    if (password_verify($pass, $user['pass'])) {
        header("Location: index.php");
    } else {
        echo 'Invalid password!';
    }
}
