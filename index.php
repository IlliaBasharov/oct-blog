<?php
include_once 'application' . DIRECTORY_SEPARATOR . 'DataBase.php';
$loginUser=$_SESSION['loginUser'];
if(empty($loginUser)){
    include_once 'includes'.DIRECTORY_SEPARATOR.'allNews.php';
} else {
    include_once 'includes'.DIRECTORY_SEPARATOR.'cabinet.php';
}