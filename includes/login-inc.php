<?php

if (isset($_POST["login"])) {

    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    loginUser($conn, $email, $password);

} else {
    header("Location: ../404.php");
}