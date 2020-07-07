<?php
// On appelle la session
session_start();
 
// On écrase le tableau de session
$_SESSION = array();
 
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
 
session_unset();
 
// On détruit la session
session_destroy();
header("location:index.php");
?>


