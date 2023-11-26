<?php

session_start();
include "dbConn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($username)) {
        header("Location: login.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $hashedPass = hash('sha256', $pass);
    
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['debugHashedPass'] = $hashedPass; //
            $_SESSION['debugRowPass'] = $row['password']; //

            if (hash_equals($row['password'], $hashedPass)) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: login.php");
                exit();
            } else {
                    header("Location: debug.php"); //
                    //header("Location: login.php?error=Incorrect Username or Password");
                    exit();
            }
        } else {
            header("Location: login.php?error=Database error");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}