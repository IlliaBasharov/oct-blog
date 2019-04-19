<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/autorization.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title></title>
    </head>
    <body>
        <div id="form" class="w3-card-4">
            <div class="w3-container w3-teal">
                <h2>Авторизация</h2>
            </div>
            <form method="post" class="w3-container">

                <label for="loginField" class="w3-text-teal">Логин</label>
                <input id="loginField" type="text" name="login" required class="w3-input w3-border w3-light-grey">

                <label for="passwordField" class="w3-text-teal">Пароль</label>
                <input id="passwordField" type="password" name="password" required class="w3-input w3-border w3-light-grey">

                <input type="submit" value="Войти" class="w3-btn w3-blue-grey">
                <input type="button" value="Зарегистрироваться" onclick="location.href = ' http://oct-blog/registration.php'" class="w3-btn w3-blue-grey">

            </form>
        </div>

    </body>
</html>
















