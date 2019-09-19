<?php


class login
{
    public function __construct() {
        if (isset($_POST['submit'])) {
            $sql = new sql();
            $pass = $sql->checkpassword($_POST['login']);
            if($pass[0]['password'] == $_POST['password']) {
                echo "Login Ok";
                session_regenerate_id(true);
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $_POST['login'];

                // Redirect user to welcome page
                header("location: users");
            }
        } else {
            $view = new view('login');
        }




    }
}