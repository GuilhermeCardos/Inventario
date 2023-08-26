<?php
    session_start();

    unset($_SESSION["usuario"]);
    unset ($_SESSION['name']);

    session_destroy();

    header("Location: index.php");

    exit;