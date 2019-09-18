<?php


class logout
{
    public function __construct() {
        $_SESSION["loggedin"] = false;
        $_SESSION["username"] = "";
        session_regenerate_id(true);

        // Redirect user to welcome page
        header("location: users");
    }
}