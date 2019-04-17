<?php
include_once 'application' . DIRECTORY_SEPARATOR . 'DataBase.php';
$user=$_SESSION['loginUser'];
if(empty($user)){
    include_once 'includes'.DIRECTORY_SEPARATOR.'allNews.php';
} else {
    include_once 'includes'.DIRECTORY_SEPARATOR.'cabinet.php';
}