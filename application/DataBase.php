<?php

class DataBase {

    public function __construct() {
        include_once 'config.php';
        echo DB_HOST;
    }

}
