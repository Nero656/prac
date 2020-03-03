<?php

class Model
{
    public function __construct()
    {
        require_once "settings.php";
        mysqli_set_charset($this->link = new mysqli(
            $host,
            $user,
            $pass,
            $db
        ), 'utf8');
    }

    public function get_data()
    {
    }
}

