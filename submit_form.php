<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tycse";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rollNumber = $_POST["Roll_Number"];
    $fullName = $_POST["Full_Name"];
    $dbatuEnrollmentNumber = $_POST["DBATU_Enrollment_Number"];
    $currentYear = $_POST["Current_Year"];
    $emailAddress = $_POST["Email_Address"];
    $personalMobileNumber = $_POST["Personal_Mobile_Number"];
    $ssc=$_POST["ssc"];
    $hsc_diploma=$_POST["hsc_diploma"];
    $sql = "INSERT INTO basic (Roll_Number, Full_Name, DBATU_Enrollment_Number, Current_Year, Email_Address, Personal_Mobile_Number,ssc,hsc_diploma)
            VALUES ('$rollNumber', '$fullName', '$dbatuEnrollmentNumber', '$currentYear', '$emailAddress', '$personalMobileNumber','$ssc','$hsc_diploma')";

    if ($conn->query($sql) === TRUE) {
        header("Location: home.html");
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
