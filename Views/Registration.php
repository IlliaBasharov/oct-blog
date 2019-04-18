<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="css/registration.css" rel="stylesheet" type="text/css"/>
        <script src="../js/registration.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/Footer.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php if ($massages !== true) : ?>
            <div id="error">
                <?= $massages ?>
            </div>
        <?php endif; ?>
        <div id="form" class="w3-card-4">
            <div class="w3-container w3-teal">
                <h2>Registration</h2>
            </div>
            <form action="registration.php" class="w3-container" method="POST" name="register">
                <p>
                    <label class="w3-text-teal"><b>Login</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="text" name="login" required>
                </p>
                <p>
                    <label class="w3-text-teal"><b>Password</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="password" name="password" required>
                </p>
                <p>
                    <label class="w3-text-teal"><b>Confirm password</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="password" name="confirm_password" required>
                </p>
                <p>
                    <label class="w3-text-teal"><b>Email</b></label>
                    <input class="w3-input w3-border w3-light-grey" type="email" name="email" required>
                </p>
                <p>
                    <button type="submit" class="w3-btn w3-blue-grey" name="register" value="register">Register</button>
                </p>
            </form>
        </div>
         <?php include_once 'Footer.php'; ?> 
    </body>
</html>

