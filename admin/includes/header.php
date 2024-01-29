<?php

session_regenerate_id();

require_once("../config/connect.php");
if(!isset($_SESSION["auth"])){
    $_SESSION["message"] = "Login First";
    header("location: index.php");
    exit(0);
}


?>

<body class="sb-nav-fixed">
    <?php require_once("top-navbar.php"); ?>

    <div id="layoutSidenav">

        <?php require_once("sidebar.php"); ?>

        <div id="layoutSidenav_content">
            <main>