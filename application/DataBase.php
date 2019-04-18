<?php

include_once $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR. 'config_example.php';
include_once 'User.php';

class DataBase {

    public $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    private function connect() {
        if ($this->mysqli->connect_errno) {
            echo "Извините, возникла проблема с базой данных\n";
            echo "Ошибка: " . $this->mysqli->connect_error . "\n";
            exit();
        }
    }

    public function getNews() {
        $this->connect();
        $sql = "SELECT artickles.id, artickles.name, artickles.text FROM artickles ;";
        if (!$result = $this->mysqli->query($sql)) {
            // О нет! запрос не удался. 
            echo "Извините, возникла проблема в работе сайта.";
            echo "Запрос: " . $sql . "\n";
            echo "Номер ошибки: " . $this->mysqli->errno . "\n";
            echo "Ошибка: " . $this->mysqli->error . "\n";
            exit;
        }
        $news = $result->fetch_all(MYSQLI_ASSOC);
        return $news;
    }
    
    public function getNewsById($id){
        $this->connect();
        $sql = "SELECT artickles.*, users.login FROM artickles INNER JOIN users ON artickles.user_id = users.id WHERE artickles.id = ".$id.";";
        if (!$result = $this->mysqli->query($sql)) {
            // О нет! запрос не удался. 
            echo "Извините, возникла проблема в работе сайта.";
            echo "Запрос: " . $sql . "\n";
            echo "Номер ошибки: " . $this->mysqli->errno . "\n";
            echo "Ошибка: " . $this->mysqli->error . "\n";
            exit;
        }
        $news = $result->fetch_assoc();
        return $news;
    }

    public function setNews($name, $text, $photo, $dateOfCreate, $dateOfChange, $user_id) {
        $this->connect();
        // example of date = 2019-04-03 00:00:00;
        $sql = "INSERT INTO artickles VALUES (null, '" . $name . "', '" . $text . "', '" . $photo . "', '" . $dateOfCreate . "', '" . $dateOfChange . "', '" . $user_id . "')";
        if (!$result = $this->mysqli->query($sql)) {
            // О нет! запрос не удался. 
            echo "Извините, возникла проблема в работе сайта.";
            echo "Запрос: " . $sql . "\n";
            echo "Номер ошибки: " . $this->mysqli->errno . "\n";
            echo "Ошибка: " . $this->mysqli->error . "\n";
            exit;
        }
    }

    public function getUser($login) {
        $this->connect();
        $sql = "select id, login, pass, email from users where login = '" . $login . "';";
        if (!$result = $this->mysqli->query($sql)) {
            // О нет! запрос не удался. 
            echo "Извините, возникла проблема в работе сайта.";
            echo "Запрос: " . $sql . "\n";
            echo "Номер ошибки: " . $this->mysqli->errno . "\n";
            echo "Ошибка: " . $this->mysqli->error . "\n";
            exit;
        }
        $massive = $result->fetch_assoc();
        $user = new User($massive['login'], $massive['pass'], $massive['email']);
        return $user;
    }

    public function setUser($login, $pass, $email) {
        $this->connect();
        $sql = "insert into users values (null,'".$login."','".$pass."','".$email."');";
        if (!$result = $this->mysqli->query($sql)) {
            // О нет! запрос не удался. 
            echo "Извините, возникла проблема в работе сайта.";
            echo "Запрос: " . $sql . "\n";
            echo "Номер ошибки: " . $this->mysqli->errno . "\n";
            echo "Ошибка: " . $this->mysqli->error . "\n";
            exit;
        }
        
    }
    
    public function getNewsByLogin($login){
        $this->connect();
        $sql = "SELECT artickles.id, artickles.name, artickles.text FROM artickles INNER JOIN users ON artickles.user_id = users.id WHERE users.login = '".$login."';";
        if (!$result = $this->mysqli->query($sql)) {
            // О нет! запрос не удался. 
            echo "Извините, возникла проблема в работе сайта.";
            echo "Запрос: " . $sql . "\n";
            echo "Номер ошибки: " . $this->mysqli->errno . "\n";
            echo "Ошибка: " . $this->mysqli->error . "\n";
            exit;
        }
        $news = $result->fetch_all(MYSQLI_ASSOC);
        return $news;
    }
    
    public function deletNews($id){
        //"DELETE FROM `artickles` WHERE `artickles`.`id` = 3"
        $this->connect();
        $sql = "DELETE FROM `artickles` WHERE `artickles`.`id` = ".$id.";";
        if (!$result = $this->mysqli->query($sql)) {
            // О нет! запрос не удался. 
            echo "Извините, возникла проблема в работе сайта.";
            echo "Запрос: " . $sql . "\n";
            echo "Номер ошибки: " . $this->mysqli->errno . "\n";
            echo "Ошибка: " . $this->mysqli->error . "\n";
            exit;
        }
    }
    public function getUserId($login) {
        $this->connect();
        $sql = "select id from users where login = '" . $login . "';";
        if (!$result = $this->mysqli->query($sql)) {
            // О нет! запрос не удался. 
            echo "Извините, возникла проблема в работе сайта.";
            echo "Запрос: " . $sql . "\n";
            echo "Номер ошибки: " . $this->mysqli->errno . "\n";
            echo "Ошибка: " . $this->mysqli->error . "\n";
            exit;
        }
        return $result;
    }

}
