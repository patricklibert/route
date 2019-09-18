<?php
require_once 'model/DB.php';

class sql
{
    public function users() {
        $db1 = new DB();
        $inhoud = $db1->select("SELECT id, first_name, last_name, email, github, preferred_language, linkedin, avatar FROM hopper_2");
        return $inhoud;
    }

    public function user($first) {
        $db = new DB();
        $row = $db->select("SELECT id, first_name, last_name, email, preferred_language, linkedin, avatar FROM hopper_2 WHERE first_name = '$first'");
        return $row;
    }

    public function checkpassword($user) {
        $dbpass = new DB();
        $pass = $dbpass->select("SELECT username, password FROM hopper_2 WHERE username = '$user'");
        return $pass;

    }




}