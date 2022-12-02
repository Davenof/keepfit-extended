<?php

    session_start();
    session_unset();
    session_destroy();

    header("Location: ../successful-logout.php");
    exit();

