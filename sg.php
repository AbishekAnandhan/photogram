<pre>
    <?php
    include 'libs/load.php';

    $cookie_name = "testscript";
    $cookie_value = $_SERVER['REQUEST_URI'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    print("_SERVER \n");
    print_r($_SERVER);
    print("_GET \n");
    print_r($_GET);
    print("_POST \n");
    print_r($_POST);
    print("_FILES \n");
    print_r($_FILES);
    print("_COOKIE \n");
    print_r($_COOKIE);
    print("_SESSION \n");
    print_r($_SESSION);

    ?>
</pre>