<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "admin" && $password == "admin"){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            setcookie('username', $username, time() + 30*24*60*60);
            setcookie('password', $password, time() + 30*24*60*60);

            header('Location: ./admin/index.php');
        }
    }
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (isset($_POST['submit'])) {
//         $username = $_POST['username'];
//         $password = $_POST['password'];
//         if($username == "admin" && $password == "admin"){
//             session_start();
//             $_SESSION['username'] = $username;
//             $_SESSION['password'] = $password;

//             setcookie('username', $username, time() + 30*24*60*60);
//             setcookie('password', $password, time() + 30*24*60*60);

//             header('Location: ./admin/index.php');
//         }
//     }
// }

