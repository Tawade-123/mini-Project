<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["signup_username"];
    $email = $_POST["signup_email"];
    $password = $_POST["signup_password"];

    // Perform signup validation
    $sql = "INSERT INTO information (Username, email, Security_key) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        // Signup successful, redirect to home.html or handle accordingly
        header("Location: userinfo.php");
        exit();
    } else {
        // Signup failed, redirect back to signup.html or handle accordingly
        header("Location: index.php");
        exit();
    }
}

$conn->close();
?>
</body>
</html>