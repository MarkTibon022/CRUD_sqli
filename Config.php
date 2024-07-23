<?php

$host = "localhost";
$username = "root";
$paasword ="";
$db = "product_data";

$con = new mysqli($host, $username, $paasword, $db);

if ($con->connect_error) {
    echo "bad ".$con->error;
}

?>