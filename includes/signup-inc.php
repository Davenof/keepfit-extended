<?php

if (isset($_POST["signup"])) {

    $firstName = $_POST["inputFirstName"];
    $lastName = $_POST["inputLastName"];
    $email = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];
    $passwordConfirm = $_POST["inputPasswordConfirm"];
    $designation = $_POST["inputDesignation"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    if (emailExists($conn, $email) !== false) {
        header("location: ../signup.php?error=emailtaken");
        exit();
    }
    if (passwordMatch($password, $passwordConfirm) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }

    createUser($conn, $firstName, $lastName, $email, $password, $designation);

} 

else {
    header("Location: ../401.php");
    exit();
}