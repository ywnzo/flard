<?php

$authOK = false;

if(isset($_COOKIE['sessionID'])) {
    $sessionID = $_COOKIE['sessionID'];
    $user = DB::select("*", 'users', "sessionID = '$sessionID'");
    if(isset($user)) {
        $userID = $user['ID'];
        $authOK = true;
    } else {
        setcookie("sessionID", "", time() - 3600, "/");
        setcookie("userID", "", time()-3600);
    }
}
if(!$authOK) {
    $user = null;
    $scriptName = basename($_SERVER['SCRIPT_NAME']);
    if($scriptName != 'index.php' && $scriptName != 'cards.php' && $scriptName != 'flash.php') {
        header('Location: index.php');
    }
}

?>
