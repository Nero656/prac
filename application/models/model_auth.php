<?php


class Model_Auth extends Model
{
    public function auth()
    {
        return mysqli_query($this->link, "SELECT * FROM `users`");
    }
}