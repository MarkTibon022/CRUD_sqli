<?php
session_start();
include_once "Config.php";
include_once "Components/navhome.php";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin_account WHERE username = '$username' AND password = '$password'";
    $result = $con->query($sql) or die ($con->error);
    $row = $result->fetch_assoc();
    $total = $result->num_rows;
    if ($total > 0) { 
        $_SESSION["username"] = $row["Username"];
        $_SESSION["access"] = $row["Access"];

        header("location: Home.php");
    };
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/lib/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/admin_login.css">
    <title>Document</title>
</head>
<body>
    <div class="admin min-vh-100 d-flex justify-content-center align-items-center">
        <form action="" method="post" class="w-50 text-center">
            <h1 class="text-capitalize fw-bold">log in</h1>
                <div class="input-group mb-3">
                    <span class="input-group-text">UserName</span>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Password</span>
                    <input type="password" name="password" class="form-control">
                </div>
            <button type="submit" name="login" class="btn btn-primary">Log In</button>
            <h5 class="fw-bold">Note</h5>
            <p class="text-capitalize ">log in admin account before access "Edit" and "Delete" button</p>
        </form>
    </div>
</body>
</html>