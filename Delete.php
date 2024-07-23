<?php

include_once "Config.php";

    if (isset($_POST["delete"])) {
        $ID = $_POST["Id"];

    $sql = "DELETE FROM product_list WHERE Id = '$ID'";
    $con->query($sql) or die ($con->error);

    header("location: Home.php");
    }
?>