<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="body">
        <header>
            <div class="user">
            <img src="logo.png" alt="error">
            <h2 class="name">Computer Science and Engineering department students portfolio</h2>
        </div>
        </header>
        <?php
            include("db_connection.php");
        ?>
        <div class="content">
            <section class="login-signup">
                <div class="login">
                    <h2>Login</h2>
                    <form action="login_process.php" method="post">
                        <input type="text" class="box" name="login_username" placeholder="Username" required>
                        <br>
                        <br>
                        <input type="password" class="box" name="login_password" placeholder="Password" required>
                        <br>
                        <button class="btn" type="submit">Login</button>
                    </form>
                </div>
                <div class="signup">
                    
                    <h2>Sign Up</h2>
                    <form action="signup_process.php" method="post">
                        <input type="text" class="box" name="signup_username" placeholder="Username" required>
                        <br>
                        <br>
                        <input type="email" class="box" name="signup_email" placeholder="Email" required>
                        <br>
                        <br>
                        <input type="password" class="box" name="signup_password" placeholder="Password" required><br>
                        <br>
                        <button class="btn" type="submit">Sign Up</button>
                    </form>
                </div>
            </section>
        </div>
    </div>
</body>
</html> 