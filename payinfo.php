<?php
$conn = new mysqli("localhost", "root", "", "petshop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
   
    
        $sql = "INSERT INTO paymentinfo (firstname,lastname,email, phone,address) 
                VALUES ( '$firstname','$lastname', '$email',' $phone','  $address')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('User added successfully');</script>";
            header("Location: ordersuccess.php");
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
    <title>Document</title>
    <link rel="stylesheet" href="payinfoo.css">
</head>
<body>
<header>
    <nav class="navbar">
            <div class="logo">
                <img src="./images/pet-shop-logo.png" width="110px" height="55px" >
                <span class="logo-text">--The Pet Connection--</span>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li class="shop">
                    <a href="#">Shop</a>
                    <ul class="dropdown">
                        <li class="for-pets">
                            <label for="pets-toggle" class="toggle-menu">For Pets</label>
                            <input type="checkbox" id="pets-toggle" class="toggle-input">
                            <ul class="sub-menu"><br>
                                <li><a href="Buypetdog.php">Dogs</a></li><br>
                                <li><a href="Buypetcat.php">Cats</a></li><br>
                                <li><a href="Buypetbirds.php">Birds</a></li><br>
                                <li><a href="Buypetfishesh.php">Fish</a></li><br>
                            </ul>
                        </li>
                        <li class="for-food">
                            <label for="food-toggle" class="toggle-menu">For Food</label>
                            <input type="checkbox" id="food-toggle" class="toggle-input">
                            <ul class="sub-menu"><br>
                                <li><a href="Buypetsfooddogs.php">Dogs</a></li><br>
                                <li><a href="Buypetsfoodcats.php">Cats</a></li><br>
                                <li><a href="Buypetsfoodbirds.php">Birds</a></li><br>
                                <li><a href="Buypetsfoodfishes.php">Fish</a></li><br>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Profile</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>



    <div class="shipping-form-section">
    <div class="container">
        <h2>Enter Shipping and Delivery Information</h2>

        <form action="payinfo.php" method="POST">
            <div class="form-group">
                <label for="country">Country:</label>
                <select id="country" name="country" required>
                    <option value="india">India</option>
                    <option value="usa">United States</option>
                    <option value="canada">Canada</option>
                    <option value="uk">United Kingdom</option>
                    <option value="australia">Australia</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group name-group">
                <div class="name-input">
                    <label for="first-name">First Name:</label>
                    <input type="text" id="first-name" name="firstname" required>
                </div>
                <div class="name-input">
                    <label for="last-name">Last Name:</label>
                    <input type="text" id="last-name" name="lastname" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Shipping Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>

            

            <div class="form-group">
                <label for="postal-code">Postal Code:</label>
                <input type="text" id="postal-code" name="postal-code" required>
            </div>

            <div class="form-group">
                <label for="shipping-method">Shipping Method:</label>
                <select id="shipping-method" name="shipping-method" required>
                    <option value="standard">Standard Shipping (5-7 days)</option>
                    <option value="express">Express Shipping (2-3 days)</option>
                    <option value="same-day">Same-Day Delivery (select regions)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="payment-method">Payment Method:</label>
                <select id="payment-method" name="payment-method" required>
                    <option value="cod">Cash on Delivery</option>
                    <option value="credit-card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</div>


<footer>
    <div class="footer-container">
        <p>&copy; 2025 Pet Shop. All rights reserved.</p>
    </div>
</footer>


</body>
</html>