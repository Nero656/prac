<?php

class Model
{
    public function __construct()
    {
        mysqli_set_charset($this->link = new mysqli(
            'localhost',
            'root',
            '',
            'db'
        ), 'utf8');
    }

    public function get_data()
    {
    }
}

