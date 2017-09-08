<?php
    session_start();
    if(isset($_SESSION['user']))
        header("admin.php");
    include('../php/config.php');
    require_once "../php/variables.php";
    $uname = $_POST['lgnID'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM admin WHERE uname='$uname'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result) > 0){
        while($result2=mysqli_fetch_array($result)){
            if(($uname==$result2['uname'])&&($pass==$result2['password'])){
                $_SESSION['user'] = $uname;
                $_SESSION['pass'] = $pass;
                $_SESSION['loggedin']= 1;
                //header("admin.php");
                echo "Success";
            }
            else{
                echo "Login ID and Password did not Match";
            }
        }
    }
    else{
        echo "Admin login ID doesn't exist";
    }
?>