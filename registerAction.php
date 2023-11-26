<?php

session_start();
include "dbConn.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['re_password']) && isset($_POST['email'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);
    $re_pass = validate($_POST['re_password']);
    $email = validate($_POST['email']);
    $user_data = 'username='. $username. '&email='. $email; 

    if (empty($username)) {
        header("Location: register.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($pass)) {
        header("Location: register.php?error=Password is required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: register.php?error=Re-entering password is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: register.php?error=Email is required&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: register.php?error=The confirmation password does not match&$user_data");
    } else {
        $pass = hash('sha256', $pass);

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: register.php?error=Username already taken try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(username, password, email) VALUES('$username', '$pass', '$email')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: register.php?success=Your account has been created");
                exit();
            } else {
                header("Location: register.php?error=Error occurred creating acount&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: register.php");
    exit();
}