window.onload = function () {
    var form = document.forms.register;
    form.onsubmit = function (event) {
	var pass1 = document.getElementsByName('password')[0].value;
	var pass2 = document.getElementsByName('confirm_password')[0].value;
	if(pass1 !== pass2){
	    alert('Пароли не совпадают');
	    event.preventDefault();
	}
    }
}