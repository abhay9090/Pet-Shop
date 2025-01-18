<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/8be663bb9f.js" crossorigin="anonymous"></script>
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
        .subpage1{
            height: 1800px;
            width: 100%;
            flex-direction: column;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
           
        }
        .row1{
            height: 500px;
            width: 1200px;
            display: flex;
            justify-content: space-evenly;
            background-color:white;
        }
        .firstrow{
            height: 480px;
            width: 250px;
            flex-direction: column;
            display: flex;
            justify-content: space-evenly;

           
        }
        .firstrow button{
            height: 45px;
            border: none;
            border-radius: 10px;
            background-color: rgba(246, 172, 36, 0.758)
        }
        .img1{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/betta.jpg);
            background-size: cover;
        }
        .rating1{
            height: 20px;
            width: 55px;
            
            margin-left: 7px;
        }
        .test1 p{
            color: orange;
            font-size: 20px;
        }
        .test1 h3{
            font-weight: 500;
        }
        .img2{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/goldfish1.jpeg);
            background-size: cover;
        }
        .img3{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/angelfish1.jpg);
            background-size: cover;
        }
        .img4{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/neon\ tetra.webp);
            background-size: cover;
        }
        .img5{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/cichlid1.jpg);
            background-size: cover;
        }
        .img6{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/guppy1.jpg);
            background-size: cover;
        }
        .img7{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/oscar.jpg);
            background-size: cover;
        }
        .img8{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/koifish.jpeg);
            background-size: cover;
        }
        .img9{
            height: 250px;
            width: 250px;
            display: flex;
            align-items: end;
            border-radius: 7px;
            background-image: url(Fishes/discus1.jpg);
            background-size: cover;
        }
    </style>

    <link rel="stylesheet" href="../navbar.css">
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

    <div class="subpage1">
        <div class="row1">
            <div class="firstrow">
                <div class="img1">
                    <div class="rating1">
                        <i class="fa-solid fa-star" style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                   <p> Betta Fish (Siamese Fighting Fish)</p>
                   <h3> It is a freshwater fish native to Southeast Asia.</h3>
                    <h2><i class="fa-solid fa-indian-rupee-sign"></i> 1250</h2>
                </div>
               
        
                <button><a href="buypetfish1.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
            <div class="firstrow">
                <div class="img2">
                    <div class="rating1">
                        <i class="fa-solid fa-star"style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                   <p> Goldfish</p>
                   <h3> The goldfish is a freshwater fish in the family Cyprinidae of order Cypriniformes.</h3>
                   <h2><i class="fa-solid fa-indian-rupee-sign"></i> 2250</h2>
                </div>
               
        
                <button class="btn1"><a href="buypetfish2.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
            <div class="firstrow">
                <div class="img3">
                    <div class="rating1">
                        <i class="fa-solid fa-star" style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                    
                   <p> Angelfish</p>
                   <h3> Pterophyllum is a small genus of freshwater fish from the family Cichlidae.</h3>
                   <h2><i class="fa-solid fa-indian-rupee-sign"></i> 3250</h2>
                </div>
               
        
                <button><a href="buypetfish3.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
        </div>
        <div class="row1">
            <div class="firstrow">
                <div class="img4">
                    <div class="rating1">
                        <i class="fa-solid fa-star" style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                   <p> Neon Tetra</p>
                   <h3> The neon tetra is a freshwater fish of the characin family of order Characiformes.</h3>
                    <h2><i class="fa-solid fa-indian-rupee-sign"></i> 4250</h2>
                </div>
               
        
                <button><a href="buypetfish4.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
            <div class="firstrow">
                <div class="img5">
                    <div class="rating1">
                        <i class="fa-solid fa-star"style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                   <p> Cichlid</p>
                   <h3> Cichlids are fish from the family Cichlidae in the order Cichliformes.</h3>
                   <h2><i class="fa-solid fa-indian-rupee-sign"></i> 5250</h2>
                </div>
               
        
                <button class="btn1"><a href="buypetfish5.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
            <div class="firstrow">
                <div class="img6">
                    <div class="rating1">
                        <i class="fa-solid fa-star" style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                    
                   <p> Guppy</p>
                   <h3> The guppy, also known as millionfish or the rainbow fish.</h3>
                   <h2><i class="fa-solid fa-indian-rupee-sign"></i> 6250</h2>
                </div>
               
        
                <button><a href="buypetfish6.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
        </div>
        <div class="row1">
            <div class="firstrow">
                <div class="img7">
                    <div class="rating1">
                        <i class="fa-solid fa-star" style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                   <p> Oscar Fish</p>
                   <h3> The oscar is a species of fish from the cichlid family.</h3>
                    <h2><i class="fa-solid fa-indian-rupee-sign"></i> 7250</h2>
                </div>
               
        
                <button><a href="buypetfish7.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
            <div class="firstrow">
                <div class="img8">
                    <div class="rating1">
                        <i class="fa-solid fa-star"style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                   <p> Koi Fish</p>
                   <h3> Koi, or more specifically nishikigoi, are colored varieties of carp.</h3>
                   <h2><i class="fa-solid fa-indian-rupee-sign"></i> 8250</h2>
                </div>
               
        
                <button class="btn1"><a href="buypetfish8.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
            <div class="firstrow">
                <div class="img9">
                    <div class="rating1">
                        <i class="fa-solid fa-star" style="color: orange;"></i> 4.17
                    </div>

                </div>
                <div class="test1">
                    
                   <p> Discus Fish</p>
                   <h3> Symphysodon is a genus of cichlids native to the Amazon river basin in Brazil.</h3>
                   <h2><i class="fa-solid fa-indian-rupee-sign"></i> 9250</h2>
                </div>
               
        
                <button><a href="buypetfish9.php" style="text-decoration: none; color: white;">Buy Now</a></button>
            </div>
        </div>
    </div>
    
</body>
</html>