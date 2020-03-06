<?php


class Controller_Logout extends Controller {

    function action_index()
    {
        session_destroy();
        header('Location: /main');
    }
}
