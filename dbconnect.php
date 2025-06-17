<?php
$servername = "localhost";
$username = "root";
$password = "Passc0de@288";
$dbname = "asterisk";

$asterisk_conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$asterisk_conn) {
    die("❌ Connection failed: " . mysqli_connect_error());
}
?>
