<?php 
session_start();

$userName = $_REQUEST['username'] ?? null;

if (isset($userName)) {
    $_SESSION['username'] = $userName;
    header('location: /');
    die();
}

if (isset($_SESSION['username'])){
    $userName = $_SESSION['username'];
}

if (isset($_REQUEST['logout'])){
    session_destroy();
    header('location: /');
    die();
}