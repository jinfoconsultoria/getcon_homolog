<?php
session_start();
$token = md5(session_id());

if(isset($_GET['token']) && $_GET['token'] === $token) {
    $_SESSION['logado'] = false;
    session_destroy();
    header("location: ./?logout=1");
    exit();

 } else{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
 }