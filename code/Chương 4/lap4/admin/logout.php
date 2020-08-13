<?php
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['logout'])){
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            header('Location: ../index_1.php');
        }
    }
}else{
    session_start();
    $_SESSION['login'] = "Ban can phai dang nhap";
    header('Location: ../index_1.php');
}