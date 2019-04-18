<?php 
if($_SERVER['REQUEST_METHOD']=='GET'){
?>

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
} else if ($_SERVER['REQUEST_METHOD']=='POST'){
	$login = filter_input(INPUT_POST, 'login');
	$pass = filter_input(INPUT_POST, 'password');


	include_once 'Application'.DIRECTORY_SEPARATOR.'DataBase.php';
	include_once 'config_example.php';

	$db = new DataBase();
	if (!$user = $db->getUser($login)) {
		header("Location: autorization.php");
		echo 'Invalid Login!';
	} else {
		if (password_verify($pass, $user->pass)) {
			$_SESSION['loginUser'] = $login;
			header("Location: index.php");
		} else {
			echo 'Invalid password!';
		}
	}
}