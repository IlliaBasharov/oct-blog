<form method="post" action="/login/">
    
            <label for="loginField">Логин</label>
            <input id="loginField" type="text" name="login" required>
        
            <label for="passwordField">Пароль</label>
            <input id="passwordField" type="password" name="password" required>
       
            <input type="submit" value="Войти">
            <input type="button" value="Зарегистрироваться" onclick="location.href=' http://oct-blog/registration.php'">
        
</form>
    <table>
        <tr>
            <td><label for="loginField">Логин</label></td>
            <td><input id="loginField" type="text" name="login"></td>
        </tr>
        <tr>
            <td><label for="passwordField">Пароль</label></td>
            <td><input id="passwordField" type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center"><input type="submit" value="Войти"></td>
			<td colspan="2" style="text-align: center"><input type="button" value="Зарегистрироваться"></td>
        </tr>
		
    </table>
</form>
