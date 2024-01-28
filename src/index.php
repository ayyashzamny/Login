
<?php
/*
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/index.css">
    <title>Your Website</title>
    <script>
      
    </script>
</head>
<body>


    <?php
        // Display different content for logged-in users
        if (isset($_SESSION['user_id'])) {
            echo "<p>Hello, User " . $_SESSION['user_id'] . "!</p>";
        } else {
            echo "<p>You are not logged in.</p>";
        }
    ?>

    <header>
        <div class="container">
            <h1>Your Website</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <?php
                        if (isset($_SESSION['user_id'])){
                            echo '<a href="logout.php">Logout</a>';
                        } else {
                            echo '<a href="Login.html">Login</a>';
                        }
                    ?>

                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Welcome to Your Website</h2>
            <p>Your tagline or a brief description goes here.</p>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="feature">
                <h3>Feature 1</h3>
                <p>Description of feature 1.</p>
            </div>
            <div class="feature">
                <h3>Feature 2</h3>
                <p>Description of feature 2.</p>
            </div>
            <div class="feature">
                <h3>Feature 3</h3>
                <p>Description of feature 3.</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Your Website. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
