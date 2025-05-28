<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tycse";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
    <header>
        <div class="user">
            <img src="logo.png" alt="error">
            <h2 class="name">Computer Science and Engineering department students portfolio</h2>
        </div>
    </header>
    <div class="content">
        <section>
            <h2 class="heading"><span>information Form</span></h2>
            <form action="submit_form.php" method="post">
                <input type="text" class="box" name="Roll_Number" placeholder="Roll Number" required>
                <br>
                <br>
                <input type="text" class="box" name="Full_Name" placeholder="Full Name" required>
                <br>
                <br>
                <input type="text" class="box" name="DBATU_Enrollment_Number" placeholder="DBATU Enrollment Number" required>
                <br>
                <br>
                <input type="text" class="box" name="Current_Year" placeholder="Current Year" required>
                <br>
                <br>
                <input type="email" class="box" name="Email_Address" placeholder="Email Address" required>
                <br>
                <br>
                <input type="text" class="box" name="Personal_Mobile_Number" placeholder="Personal Mobile Number" required>
                <br>
                <br>
                <input type="text" class="box" name="ssc" placeholder="10th school name" required>
                <br>
                <br>
                <input type="text" class="box" name="hsc_diploma" placeholder="12th/diploma school name" required>
                <br>
                <button class="btn" type="submit">Submit</button>
            </form>
        </section>
    </div>
</body>

</html>