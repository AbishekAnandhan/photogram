<?php

include 'libs/load.php';

$user = "abi";
$pass = "12345";
$result = null;

if (isset($_GET['logout'])) {
    Session::destroy();
    die("Session destroyed, <a href= 'logintest.php'Login Again</a>");
}

if (Session::get('is_loggedin')) {
    $userdata = Session::get('session_user');
    print("welcome back, $usernamne[username]");
    $result = $userdata;
} else {
    print("No sessin found, trying to login now.<br>");
    $result = User::login($user, $pass);
    $result = user::login($user, $pass);
    if ($result) {
        echo "login success, $result[username]";
        Session::set('is_loggedin', true);
        Session::set('session_user', $result);
    } else {
        echo "login Failed.<br>";
    }
}

echo <<<EOL
<br><br><a href= 'logintest.php?logout'Logout</a>
EOL;
