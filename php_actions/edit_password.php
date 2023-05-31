<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
// function to clear data
include_once '../includes/cleaningData.php';

if(isset($_POST['btn_submit_edit_password'])) {
    $currentPassword = cleaningData($_POST['currentPassword']);;
    $newPassword = cleaningData($_POST['newPassword']);
    $id = cleaningData($_POST['id']);;

    $sql = "SELECT password FROM tb_users WHERE password = '$currentPassword' AND id_users = '$id'";
    $result = mysqli_query($connect, $sql);
    
    if(mysqli_num_rows($result) == 1) {
        $sql = "UPDATE tb_users SET password = '$newPassword' WHERE id_users = '$id'";

        if(mysqli_query($connect, $sql)) {
            header("Location: ../user-page.php?id=$id?sucessful=true");
        }
        else {
            header("Location: ../user-page.php?id=$id");
        }
    }
    else {
        header("Location: ../user-page.php?id=$id?failured=true");
    }
}
?>