

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
$conn = new mysqli("localhost", "root", "", "petshop");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $sql = "SELECT * FROM registers WHERE email = '$email' AND password = '$password' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['email'] = $email;
        
       
        echo "<script>alert('Congratulations your login successfully');</script>";
        header("Location: index.php");
       
    } else {
        echo "<script>alert('Invalid username or password.');</script>";
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
                    <h2>Sign In To Continue</h2>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <div class="options">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit">Login</button>
                    <p style="margin-top: 10px;">Do have account?<a href="signup.php">Signup</a></p>
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