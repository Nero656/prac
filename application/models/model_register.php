<?php

class Model_Register extends Model
{
    public function register($login, $email, $password)
    {
        mysqli_query($this->link, "INSERT INTO `users`(`login`, `email`, `password`) VALUE('$login', '$email', '$password')");
    }
}