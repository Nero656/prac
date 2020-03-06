<?php
require_once 'application/models/model_auth.php';

class Controller_Auth extends Controller
{
    function __construct()
    {
        $this->model = new Model_Auth();
        $this->view = new View();
    }

    function action_index()
    {
        $this->action_auth();
        $this->view->generate('auth_view.php', 'template_view.php');
    }

    function action_auth()
    {
        $model = new Model_Auth();
        $data = $model->auth();

        if (isset($_POST['auth'])) {
            $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
            $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

            while ($row = mysqli_fetch_assoc($data)) {

                if ($login == $row['login'] && $password == $row['password']) {
                    if ($_SESSION['login'] == 'admin') {
                        header('Location: /admin');
                    } elseif ($_SESSION['login'] != 'admin') {
                        header('Location: /');
                    }
                    $_SESSION['login'] = $login;
                }
            }
        }
    }
}