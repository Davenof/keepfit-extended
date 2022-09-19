<?php

    session_start();


if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize > 1100) {
                // $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileNameNew = $_SESSION["userEmail"] . "." .$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: dashboard.php?replacementsuccessful");
            } else {
                echo "The file size exceeds 1 mb.";
            }
        } else {
            echo "File didn't upload correctly. Please try again.";
        }

    } else {
        echo "Only jpg, jpeg and png files allowed.";
    }
}