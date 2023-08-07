<?php

include_once 'includes/Session.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';


Session::start();

function load_template($name)
{
    // print("including ".__DIR__."../_templates/$name.php");
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";
}

function validate_credentials($username, $password)
{
    if($username == 'selvaananth1996@gmail.com' and $password == 'password') {
        return true;
    } else {
        return false;
    }
}
