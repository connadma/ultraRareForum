<?php

session_start();

$hashedPass = $_SESSION['debugHashedPass'];
$rowPass = $_SESSION['debugRowPass'];

echo($hashedPass);
echo("\n");
echo($rowPass);

/*
if (empty($username)) {
    header("Location: login.php?error=User Name is required");
    exit();
} else if (empty($pass)) {
    header("Location: login.php?error=Password is required");
    exit();
} else {
    // Hash the user-entered password using SHA-256
    $hashedPass = hash('sha256', $pass);
    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Verify the hashed user-entered password with the stored hash
        if ($row && hash_equals($row['password'], $hashedPass)) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            header("Location: login.php");
            exit();
        } else {
            header("Location: login.php?error=Incorrect Username or Password");
            exit();
        }
    } else {
        header("Location: login.php?error=Database error");
        exit();
    }
}
*/
/*
if (empty($username)) {
        header("Location: login.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $pass = hash('sha256', $pass);
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: login.php");
                exit();
            } else {
                header("Location: login.php?error=Incorrect Username or Password1");
                exit();
            }
        } else {
            header("Location: login.php?error=Incorrect Username or Password2");
            exit();
        }
    }
*/
 // } else {
?>