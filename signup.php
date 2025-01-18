
<?php
$conn = new mysqli("localhost", "root", "", "petshop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    
        $sql = "INSERT INTO registers (username,email, password) 
                VALUES ( '$username','$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User added successfully');</script>";
            header("Location: login.php");
        } else {
            echo "<script>alert('error');</script> " . $conn->error;
        }
    }
   
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care Login</title>
    <link rel="stylesheet" href="loginstyles.css">
</head>
<body>
    <div class="login-container">
        <div class="left-section">
            <div class="content">
                <img src="./images/pet-shop-logo.png" alt="pet-shop-logo" class="logo">
                <h1 class="brand">Pet Shop</h1>
                <form  method="POST" action="">
                    <h2>Sign Up</h2>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Register</button>
                    <p style="margin-top: 10px;">Do have account?<a href="login.php">Signin</a></p>
                </form>
                <div class="footer-links">
                    <a href="#">Terms & Conditions</a> | <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
        <div class="right-section">
            <img src="images/blackdog.jpg" alt="Dog" class="dog-image">
        </div>
    </div>
</body>
</html>