<?php
// Connection with database
require_once '../php_actions/db_connect.php';
$pdo = connect();
// Useful functions
include_once '../includes/utils.php';
// Start sessions 
session_start();
// Messages
include_once '../includes/messages.php';

if(!isset($_SESSION['adminLogged']) == true) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assembly Tech | E-commerce de periféricos e hardware</title>
    <link rel="stylesheet" href="../CSS/globals.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="../CSS/user-page.css">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="shortcut icon" href="IMAGES/includes/header/favicon/computer-96.png" type="image/x-icon">
</head>
<body>