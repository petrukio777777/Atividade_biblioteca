<?php

session_start();

$_SESSION = array();

if (ini_get("sessio.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 4290,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();

header("cache-control: no-cache, no-store, must-revalidate");
header("pragma: no-cache");
header("expires: 0");

header("location: login.php");
exit();