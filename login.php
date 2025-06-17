<?php
session_start();
include 'dbconnect.php';

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // If passwords are stored in plain text
    $query = "SELECT * FROM vicidial_users WHERE user = '$user' AND pass = '$password'";

    // If passwords are stored in MD5:
    // $enc_password = md5($password);
    // $query = "SELECT * FROM vicidial_users WHERE user = '$user' AND pass = '$enc_password'";

    $result = mysqli_query($asterisk_conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $user;
        header("Location: /vicidial/welcome.php"); // ✅ redirect to VICIdial welcome page
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password";
        header("Location: index.php");
        exit();
    }
}
?>
