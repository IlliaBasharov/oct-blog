<?php
spl_autoload_register(function ($class_name) {
    $class_file = 'application' . DIRECTORY_SEPARATOR . $class_name . '.php';
    if (file_exists($class_file)) {
        include_once $class_file;
        return TRUE;
    }
    return FALSE;
});

//if (!empty($_POST['register'])){
//   var_dump($_POST['register']);
//    header( 'Location: http://google.ru');
//}

function getUserData() {
    $user_data = [];
    $user_data['login'] = filter_input(INPUT_POST, 'login');
    $user_data['password'] = filter_input(INPUT_POST, 'password');
    $user_data['confirm_password'] = filter_input(INPUT_POST, 'confirm_password');
    $user_data['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    return $user_data;
}

function validateUserData($user_data) {
    if (empty($user_data['login'])) {
        $massages = 'логин не введен';
    } elseif (empty($user_data['password'])) {
        $massages = 'пароль не введен';
    } elseif (empty($user_data['confirm_password'])) {
        $massages = 'пароль не введен';
    } elseif ($user_data['password'] !== $user_data['confirm_password']) {
        $massages = 'пароли не совпадают';
    } elseif (empty($user_data['email'])) {
        $massages = 'почта введена не верно';
    } else {
        return true;
    }
    return $massages;
}


if (!empty($_POST['register'])) {
    $user_data = getUserData();
    $massages = validateUserData($user_data);
} 

if(!empty($massages)){
     echo $massages;
}

if ($massages === true) {
    $user = new User($user_data['login'], $user_data['password'], $user_data['email']);
    // далее тут инсертим юзера в БД и делаем переход по сылке что у меня не получилось!))
    header( 'Location: http://google.ru');
//    var_dump($user);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            #form{
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
                width: 300px; 
            }
        </style>
        <script src="../js/main.js" type="text/javascript"></script>
    </head>
    <body
        <div id="form" class="w3-card-4">
            <div class="w3-container w3-teal">
                <h2>Registration</h2>
            </div>
            <form action="registration.php" class="w3-container" method="POST" name="register">
                <p>
                    <label class="w3-text-teal"><b>Login</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="text" name="login" >
                </p>
                <p>
                    <label class="w3-text-teal"><b>Password</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="password" name="password" >
                </p>
                <p>
                    <label class="w3-text-teal"><b>Confirm password</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="password" name="confirm_password" >
                </p>
                <p>
                    <label class="w3-text-teal"><b>Email</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="email" name="email" >
                </p>
                <p>
                    <button type="submit" class="w3-btn w3-blue-grey" name="register" value="register">Register</button>
                </p>
            </form>
        </div>
    </body>
</html>
