<?php
spl_autoload_register(function ($class_name) {
    $class_file = 'application' . DIRECTORY_SEPARATOR . $class_name . '.php';
    if (file_exists($class_file)) {
        include_once $class_file;
        return TRUE;
    }
    return FALSE;
});

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

$database = new DataBase ();

if (!empty($_POST['register'])) {
    $user_data = getUserData();
    $massages = validateUserData($user_data);
    $user = $database->getUser($user_data['login']);
    if(!empty($user->login)){
        $massages = 'такой юзер уже зарегистрирован';
    }
}

if ($massages === true) {
    $database->setUser($user_data['login'], $user_data['password'], $user_data['email']);
    header('Location:'.URL_SITE);
}

include_once 'Views'.DIRECTORY_SEPARATOR.'registration.php';

