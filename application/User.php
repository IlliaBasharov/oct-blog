<?php

class User {

    public $login;
    public $pass;
    public $email;

    public function __construct() {
	$a = func_get_args();
	$i = func_num_args();
	if (method_exists($this, $f = '__construct' . $i)) {
	    call_user_func_array(array($this, $f), $a);
	}
    }

    function __construct0() {
	
    }

    function __construct3($login, $pass, $email) {
	$this->login = $login;
	$this->pass = $pass;
	$this->email = $email;
    }

    public function logIn() {
	$_SESSION['loginUser'] = $this->login;
    }

    public function logOut() {
	unset($_SESSION['loginUser']);
    }

    public function register() {
	$database = new DataBase();
	$database->setUser($this->login, $this->pass, $this->email);
    }

}
