<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        header {
    background-color: #e60000; 
    padding: 15px 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;
    margin: 0 auto;
}

.logo {
    display: flex;
    align-items: center;
}
.logo img {
    height: 70px;
    width: 78px;
    border-radius: 50px;
    margin-right: 10px;
    
    background-size: cover;
    z-index: 1;
}


.logo-text {
    font-size: 24px;
    color: #fff;
    font-weight: 500;
    text-transform: uppercase;
}

.nav-links {
    display: flex;
    align-items: center;
    list-style: none;
}

.nav-links li {
    margin-left: 20px;
    position: relative;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 8px 15px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.nav-links a:hover {
    background-color: #fc9d9d; 
    color: #333;
}


.shop {
    position: relative;
}

.shop > a {
    text-decoration: none;
    display: inline-block;
    padding: 10px;
}

.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #ef3737;
    list-style: none;
    padding: 0;
    margin: 0;
    border: 1px solid #ccc;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.shop:hover .dropdown {
    display: block;
}

.dropdown > li {
    position: relative;
}


.toggle-input {
    display: none;
}


.toggle-menu {
    cursor: pointer;
    display: block;
    padding: 10px;
}


.sub-menu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
    border: 1px solid #ccc;
    background-color: #f32d2d;
}


.toggle-input:checked + .sub-menu {
    display: block;
}

.sub-menu li a {
    padding-left: 20px;
    color: #555;
}

.sub-menu li a:hover {
    background-color: #f29f9f;
}

body {
            font-family: Arial, sans-serif;
            
            line-height: 1.6;
        }

        .product-container {
            width: 800px;
            margin: 0 auto;
            height: 450px;
            padding: 20px;
            display: flex;
            justify-content: space-evenly;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .sub-dog{
            height: 300px;
            width: 300px;
            background-image: url(catsfood/scottish-ka-food.jpeg);
            background-size: cover;
           
        }
        .sub-product{
            height: 200px;
            width: 300px;
           
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .sku {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .price {
            font-size: 18px;
            color: #f60;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .reviews {
            font-size: 14px;
            color: #555;
        }

        .review-stars {
            color: gold;
        }

        .description {
            margin-top: 20px;
            font-size: 14px;
            color: #333;
        }
        .product-container button{
            height: 40px;
            width: 100px;
            margin-top: 60px;
            border: none;
            color: white;
            border-radius: 10px;
            background-color: cornflowerblue;
        }


@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .nav-links {
        flex-direction: column;
        margin-top: 15px;
    }

    .nav-links li {
        margin-left: 0;
        margin-bottom: 10px;
    }
}
    </style>
</head>
<body>
    <header>
         <nav class="navbar">
            <div class="logo">
                <img src="pet shop/logo.jpg" width="auto" height="40px">
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
                                <li><a href="Buypetbirds.php">birds</a></li><br>
                                <li><a href="Buypetfishesh.php">Fish</a></li><br>
                            </ul>
                        </li>
                        <li class="for-food">
                            <label for="food-toggle" class="toggle-menu">For Food</label>
                            <input type="checkbox" id="food-toggle" class="toggle-input">
                            <ul class="sub-menu"><br>
                                <li><a href="Buypetsfooddogs.php">Dogs</a></li><br>
                                <li><a href="Buypetsfoodcats.php">Cats</a></li><br>
                                <li><a href="Buypetsfoodbirds.php">birds</a></li><br>
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



    <div class="pet-img"></div>
    <div class="product-container">
       <div class="sub-dog">

       </div>
        <div class="sub-product">
            <div class="product-title">Scottish Food</div>
        <div class="sku">SKU: LIGHTWEIGHT-ALUMINUM-CLOCK-58917473</div>
        <div class="price">500Rs &ndash; 1600Rs</div>
        <div class="reviews">
            <span class="review-stars">&#9733;&#9733;&#9733;&#9733;&#9734;</span> (5 Reviews)
        </div>
        <div class="description">
            Scottish Fold cats don't have specific dietary requirements other than a complete and balanced cat food.
        </div>
        <button > <a href="payinfo.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
    </div>


    
</body>
</html>