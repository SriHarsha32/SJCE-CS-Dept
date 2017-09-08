<?php
    session_start();
    if(!isset($_SESSION['user']))
        header("index.php");
    include('../php/config.php');
    require_once "../php/variables.php";
    $uname = $_POST['lgnID'];
    $pass = $_POST['oldpass'];
    $pass2 = $_POST['newpass'];
    $sql1 = "SELECT * FROM admin WHERE uname='$uname'";
    $users =  mysqli_query($db,$sql1);
    if(mysqli_num_rows($users) > 0){
        $sql = "UPDATE admin SET password='$pass2' WHERE uname='$uname'";
        $result=mysqli_query($db,$sql);
        if($result){
            $_SESSION['pass'] = $pass2;
            echo "Successfully changed password.";
        }
        else{
            echo "Couldn't change password.";
        }
    }
    else{
        echo "Admin Login ID doesn't exist.";
    }
?>