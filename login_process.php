<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["login_username"];
    $password = $_POST["login_password"];

    // Perform login validation
    $sql = "SELECT * FROM information WHERE username = '$username' AND security_key = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect to home.html
        header("Location: home.html");
        exit();
    } else {
        // Login failed, redirect back to login.html or handle accordingly
        header("Location: index.php");
        exit();
    }
}

$conn->close();
?>

