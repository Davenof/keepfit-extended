<?php

function emailExists($conn, $email) {
    $sql = "SELECT * FROM classlogin WHERE EmailAddress = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
 
}

function createUser($conn, $firstName, $lastName, $email, $password, $designation) {
    $sql = "INSERT INTO classlogin (FirstName, LastName, EmailAddress, UserPassword, UserDesignation) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $hashedPassword, $designation);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../successful-signup.php?error=none");
    exit();
    
}


function passwordMatch($password, $passwordConfirm) {
    $result = "";

    if ($password !== $passwordConfirm) {
        $result = true;
    }

    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password) {
    $emailExists = emailExists($conn, $email, $password);

        if ($emailExists === false) {
            header("Location: ../login.php?error=wrongemail");
            exit();
        }

    $passwordHashed = $emailExists["UserPassword"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        header("Location: ../login.php?error=wrongpassword");
        exit();
    }

    else if ($checkPassword === true) {
        session_start();
        $_SESSION["userID"] = $emailExists["UserID"];
        $_SESSION["userEmail"] = $emailExists["EmailAddress"];
        $_SESSION["userFirst"] = $emailExists["FirstName"];
        $_SESSION["userLast"] = $emailExists["LastName"];
        $_SESSION["userStatus"] = $emailExists["UserDesignation"];
        header("Location: ../dashboard.php");
        exit();
    }


}



