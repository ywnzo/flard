<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$conn = mysqli_connect('localhost', 'admin', 'Pecinka21*', 'flard');
if(!$conn) {
    echo "Connection error: " . mysqli_connect_error();
}

include($_SERVER['DOCUMENT_ROOT'] .'/flard/classes/db.php');

?>