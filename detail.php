<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "tycse";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if 'id' is set in the URL
    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        // Query to select data based on the provided id
        $sql = "SELECT * FROM Basic WHERE id = $id";
        $result = $conn->query($sql);

        // Check if there is a result
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Use the fetched data in your HTML
            $full_name = $row['Full_Name'];
            $email = $row['Email_Address'];
            $phone = $row['Personal_Mobile_Number'];
            $ssc = $row['ssc'];
            $hsc_diploma=$row['hsc_diploma'];
        } else {
            echo "No results found";
        }
    } else {
        echo "No ID parameter provided";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="body">
    <!-- header section starts -->

    <header>

        <div class="user">
            <img src="logo.png" alt="">
            <h3 class="name"><?php echo $full_name?></h3>
            <p class="post">Computer Engineering Student</p>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#education">education</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>

    </header>

    <!-- header section ends -->


    <div id="menu" class="fas fa-bars"></div>


    <!-- home section starts -->

    <section class="home" id="home">

        <h3>HI THERE !</h3>
        <h1>I'M <span><?php echo $full_name?></span></h1>
        <p>I am flexible, reliable and possess excellent time keeping skills. I am an enthusiastic, self-motivated, reliable, responsible and hard working person. I am a mature team worker and adaptable to all challenging situations. I am able to work well both in a team environment as well as using own initiative.
        </p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

    </section>

    <!-- home section ends -->


    <!-- about section starts -->
    <section class="about" id="about">
        <h1 class="heading"><span>about</span> me </h1>
        <div class="row">
            <div class="info">
                <h3> <span> name : </span> <?php echo $full_name?> </h3>
                <h3> <span> age : </span> 20 </h3>
                <h3> <span> Qualification : </span> B-Tech * </h3>
                <h3> <span> Course : </span> Computer Engineering </h3>
                <h3> <span> language : </span> Marathi </h3>
            </div>

        
    </section>

    <!-- about section ends -->


    <!-- Education section starts -->

    <section class="education" id="education">
        <h1 class="heading"><span>education</span></h1>

        <div class="box-container">
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2018</span>
                <h3>SSC</h3>
                <p><?php echo $ssc?></p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2020</span>
                <h3>HSC</h3>
                <p><?php echo $hsc_diploma?></p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>2025</span>
                <h3>B-Tech</h3>
                <p>Shri Sant Gadge Baba College of engineeering and Technology, Bhusawal</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>...</span>
                <h3>...</h3>
                <p>...</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>...</span>
                <h3>...</h3>
                <p>...</p>
            </div>

            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>...</span>
                <h3>...</h3>
                <p>...</p>
            </div>

        </div>
    </section>

    <!-- Education section ends -->
    <!-- about section starts -->
    <section class="contact" id="contact">

        <h1 class="heading"><span>Contact</span> me </h1>

        <div class="row">

            <div class="content">

                <h3 class="title">Contact Info</h3>

                <div class="info">
                    <h3><i class="fas fa-envelope"></i><?php echo $email?></h3>
                    <h3><i class="fas fa-phone"></i>+91-<?php echo $phone?></h3>
                    <h3><i class="fas fa-map-marker-alt"></i>Bhusawal, Maharashtra, India - 425201.</h3>
                </div>

            </div>

            <form action="">

                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="text" placeholder="subject" class="box">
                <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="To me"></textarea>
                <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i></button>

            </form>

        </div>
    </section>
    <!-- about section ends -->
    
    </div>
</body>

</html>