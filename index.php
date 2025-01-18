<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pet Connection</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="./images/pet-shop-logo.png" width="110px" height="55px" >
                <span class="logo-text">The Pet Connection</span>
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
    <section class="hero">
        <div class="hero-overlay">
            <div class="hero-text">
                <h1>Welcome to The Pet Connection!</h1>
                <p>Your one-stop shop for all things pets. We offer a wide variety of pet supplies, animals, and care products for your furry, feathered, and scaly friends!</p>
            </div>
        </div>
    </section>
    <section class="image-buttons">
        <div class="button-container">
            <a href="Buypetdog.php" class="image-button" style="background-image: url('pet shop/Dogs/labrador.jpg');">
                <span>Dogs</span>
            </a>
            <a href="Buypetcat.php" class="image-button" style="background-image: url('pet shop/Cats/bengal.jpg');">
                <span>Cats</span>
            </a>
            <a href="Buypetfishesh.php" class="image-button" style="background-image: url('pet shop/Fishes/goldfish.jpg');">
                <span>Fishes</span>
            </a>
            <a href="Buypetbirds.php" class="image-button" style="background-image: url('pet shop/Birds/canary.webp');">
                <span>Birds</span>
            </a>
        </div>
    </section>
    <section id="dogs" class="pets-section">
        <h2>Our Dogs for Sale</h2>
        <div class="pets-container">
            <div class="pet-card">
                <img src="pet shop/Dogs/Golden retriever.jpg" alt="Dog 1">
                <div class="pet-info">
                    <h3>Golden Retriever</h3>
                    <p>Friendly and loyal, perfect for families.</p>
                    <p class="price">&#8377; 50000</p>
                    <button class="buy-now"><a href="Buypetdog.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Dogs/bulldog.jpeg" alt="Dog 2">
                <div class="pet-info">
                    <h3>Bulldog</h3>
                    <p>Affectionate and courageous, ideal for apartment living.</p>
                    <p class="price">&#8377; 60000</p>
                    <button class="buy-now"><a href="Buypetdog.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Dogs/beagle.jpeg" alt="Dog 3">
                <div class="pet-info">
                    <h3>Beagle</h3>
                    <p>Energetic and friendly, great for active owners.</p>
                    <p class="price">&#8377; 45000 </p>
                    <button class="buy-now"><a href="Buypetdog.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Dogs/german shephard2.webp" alt="Dog 4">
                <div class="pet-info">
                    <h3>German Shepherd</h3>
                    <p>Highly intelligent and protective, excellent for security.</p>
                    <p class="price">&#8377; 70000</p>
                    <button class="buy-now"><a href="Buypetdog.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Cats Section -->
    <section id="cats" class="pets-section">
        <h2>Our Cats for Sale</h2>
        <div class="pets-container">
            <div class="pet-card">
                <img src="pet shop/Cats/persian1.jpeg" alt="Cat 1">
                <div class="pet-info">
                    <h3>Persian Cat</h3>
                    <p>Elegant and playful, perfect for a quiet home.</p>
                    <p class="price">&#8377; 40000</p>
                    <button class="buy-now"><a href="Buypetcat.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Cats/siamese.jpg" alt="Cat 2">
                <div class="pet-info">
                    <h3>Siamese Cat</h3>
                    <p>Vocal and affectionate, a loving companion.</p>
                    <p class="price">&#8377; 35000</p>
                    <button class="buy-now"><a href="Buypetcat.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Cats/maine coon.jpg" alt="Cat 3">
                <div class="pet-info">
                    <h3>Maine Coon</h3>
                    <p>Large, friendly, and great with children.</p>
                    <p class="price">&#8377; 50000</p>
                    <button class="buy-now"><a href="Buypetcat.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Cats/british shorthair.webp" alt="Cat 4">
                <div class="pet-info">
                    <h3>British Shorthair</h3>
                    <p>Calm and easy-going, perfect for first-time cat owners.</p>
                    <p class="price">&#8377; 55000</p>
                    <button class="buy-now"><a href="Buypetcat.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Fishes Section -->
    <section id="fishes" class="pets-section">
        <h2>Our Fishes for Sale</h2>
        <div class="pets-container">
            <div class="pet-card">
                <img src="pet shop/Fishes/betta.jpg" alt="Fish 1">
                <div class="pet-info">
                    <h3>Betta Fish</h3>
                    <p>Vibrant and colorful, perfect for small tanks.</p>
                    <p class="price">&#8377; 1500</p>
                    <button class="buy-now"><a href="Buypetfishesh.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Fishes/goldfish.jpg" alt="Fish 2">
                <div class="pet-info">
                    <h3>Goldfish</h3>
                    <p>Easy to care for and beautiful in any aquarium.</p>
                    <p class="price">&#8377; 1000</p>
                    <button class="buy-now"><a href="Buypetfishesh.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Fishes/neon tetra.jpg" alt="Fish 3">
                <div class="pet-info">
                    <h3>Neon Tetra</h3>
                    <p>Small and peaceful, great for community tanks.</p>
                    <p class="price">&#8377; 500</p>
                    <button class="buy-now"><a href="Buypetfishesh.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Fishes/angelfish.jpg" alt="Fish 4">
                <div class="pet-info">
                    <h3>Angelfish</h3>
                    <p>Elegant and graceful, perfect for freshwater tanks.</p>
                    <p class="price">&#8377; 2000</p>
                    <button class="buy-now"><a href="Buypetfishesh.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Birds Section -->
    <section id="birds" class="pets-section">
        <h2>Our Birds for Sale</h2>
        <div class="pets-container">
            <div class="pet-card">
                <img src="pet shop/Birds/eclectus parrot.jpg" alt="Bird 1">
                <div class="pet-info">
                    <h3>Parakeet</h3>
                    <p>Small, colorful, and lively companion.</p>
                    <p class="price">&#8377; 2500</p>
                    <button class="buy-now"><a href="Buypetbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Birds/macaw.jpg" alt="Bird 2" >
                <div class="pet-info">
                    <h3>Macaw</h3>
                    <p>Large and vibrant, requires plenty of attention.</p>
                    <p class="price">&#8377; 3000</p>
                    <button class="buy-now"><a href="Buypetbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Birds/canary.webp" alt="Bird 3">
                <div class="pet-info">
                    <h3>Canary</h3>
                    <p>Cheerful and musical, perfect for small spaces.</p>
                    <p class="price">&#8377; 4000</p>
                    <button class="buy-now"><a href="Buypetbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
            <div class="pet-card">
                <img src="pet shop/Birds/lovebird.jpg" alt="Bird 4">
                <div class="pet-info">
                    <h3>Lovebird</h3>
                    <p>Affectionate and social, great for companionship.</p>
                    <p class="price">&#8377; 6000</p>
                    <button class="buy-now"><a href="Buypetbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- < food section start ></food> -->
      <section class="main-section">
        <div class="image-container">
          <img src="pet shop/offer.jpg" alt="A sample image">
        </div>
      </section>
    <br><br>
      <h1 align="center">The Pet Connection's Foods Best Food sellers</h1>
      <section class="gallery-section">
        <div class="gallery-item">
          <img src="pet shop/Dogs/acana singles.jpeg" alt="Image 1">
          <div class="pet-info">
            <h3>Acana Classic Wild Coast Dog Dry Food</h3>
            <p>(All Breeds, Dog Dry Food)</p>
            <p class="price">&#8377; 2,499</p>
            <button class="buy-now"><a href="Buypetsfooddogs.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/Cats/royal canin persian adult.jpeg" alt="Image 2">
           <div class="pet-info">
            <h3>Royal Canin</h3>
            <p>Persian adult cat dry food</p><br>
            <p class="price">&#8377; 9,240</p>
            <button class="buy-now"><a href="Buypetsfoodcats.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/Fishes/3.webp" alt="Image 3">
           <div class="pet-info">
            <h3>Cichlid Gold</h3>
            <p>Gold floating pellets for young adult</p><br>
            <p class="price">&#8377; 3000</p>
            <button class="buy-now"><a href="Buypetsfoodfishes.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/birds/canary food.jpg" alt="Image 4">
           <div class="pet-info">
            <h3>Egg Food</h3>
            <p>Daily supplement for birds</p><br>
            <p class="price">&#8377; 4,904</p>
            <button class="buy-now"><a href="Buypetsfoodbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
      </section>
    
      <h1 align="center">Best Food for Dogs</h1>
      <section class="gallery-section">
        <div class="gallery-item">
          <img src="pet shop/dogs/WEllness core grain free.jpeg" alt="Image 1">
           <div class="pet-info">
            <h3>Wellness Core </h3>
            <p>Grain free high-protein dry dog food for adult</p>
            <p class="price">&#8377; 3000</p>
            <button class="buy-now"><a href="Buypetsfooddogs.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/dogs/hills science diet.jpeg" alt="Image 2">
           <div class="pet-info">
            <h3>Hill's Science Diet</h3>
            <p>Science diet adult small kand toy breed chicken meal</p>
            <p class="price">&#8377; 9,875</p>
            <button class="buy-now"><a href="Buypetsfooddogs.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/dogs/purina pro plan.avif" alt="Image 3">
           <div class="pet-info">
            <h3>Purina Pro Plan</h3>
            <p>Pro plan chicken large breed adult dog dry food</p>
            <p class="price">&#8377; 2,151</p>
            <button class="buy-now"><a href="Buypetsfooddogs.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/dogs/royal canin.jpeg" alt="Image 4">
           <div class="pet-info">
            <h3>Royal Canin</h3>
            <p>Golden Retriever adult dog dry food, medium dogs
            </p>
            <p class="price">&#8377; 2,596</p>
            <button class="buy-now"><a href="Buypetsfooddogs.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
      </section>
    
      <h1 align="center">Best Food For Cats</h1>
      <section class="gallery-section">
        <div class="gallery-item">
          <img src="pet shop/cats/acana singles cat food.jpg" alt="Image 1">
           <div class="pet-info">
            <h3>Acana Singles </h3>
            <p>Wholesome grains for adult cats and medium cats</p>
            <p class="price">&#8377; 3,567</p>
            <button class="buy-now"><a href="Buypetsfoodcats.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/cats/blue buffalo wilderness.jpeg" alt="Image 2">
           <div class="pet-info">
            <h3>Blue Buffalo Wilderness</h3>
            <p>High protein natural adult dry cat food chicken and grains</p>
            <p class="price">&#8377; 6,518</p>
            <button class="buy-now"><a href="Buypetsfoodcats.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/cats/hills science diet.jpeg" alt="Image 3">
           <div class="pet-info">
            <h3>Hills Science Diet</h3>
            <p>Cat food with high proteins for adult or medium</p>
            <p class="price">&#8377; 4,456</p>
            <button class="buy-now"><a href="Buypetsfoodcats.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/cats/scottish ka food.jpeg" alt="Image 4">
           <div class="pet-info">
            <h3>Royal Canin</h3>
            <p>Indoor Adult including grain and meat, chicken for cats</p>
            <p class="price">&#8377; 6,589</p>
            <button class="buy-now"><a href="Buypetsfoodcats.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
      </section>
    
      <h1 align="center">Best Food For Birds</h1>
      <section class="gallery-section">
        <div class="gallery-item">
          <img src="pet shop/birds/cockatoo food.jpeg" alt="Image 1">
           <div class="pet-info">
            <h3>Harison's Bird Food</h3>
            <p>Adult lifetime super fine 1lb, certified organic formula </p>
            <p class="price">&#8377; 2,973</p>
            <button class="buy-now"><a href="Buypetsfoodbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/birds/african grey parrot food.webp" alt="Image 2">
           <div class="pet-info">
            <h3>FruitBlend Flavor</h3>
            <p>Zupreem Fruit Blend Bird food for large birds with natural flavors</p>
            <p class="price">&#8377; 1,995</p>
            <button class="buy-now"><a href="Buypetsfoodbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/birds/canary food.jpg" alt="Image 3">
           <div class="pet-info">
            <h3>Egg Food</h3>
            <p>Daily supplement for birds, peak health formula for pet birds</p>
            <p class="price">&#8377; 4,567</p>
            <button class="buy-now"><a href="Buypetsfoodbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/birds/macaw food.jpg" alt="Image 4">
           <div class="pet-info">
            <h3>Harrison's Bird Food</h3>
            <p>High protein grains with fine quantity and quality for large birds</p>
            <p class="price">&#8377; 5,995</p>
            <button class="buy-now"><a href="Buypetsfoodbirds.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
      </section>
    
      <h1 align="center">Best Food For Fishes</h1>
      <section class="gallery-section">
        <div class="gallery-item">
          <img src="pet shop/fishes/1.jpeg" alt="Image 1">
           <div class="pet-info">
            <h3>Betta Bio-Gold</h3>
            <p>Optimally formulated nutrision bettas require, contains beneficial factors</p>
            <p class="price">&#8377;6,500</p>
            <button class="buy-now"><a href="Buypetsfoodfishes.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/fishes/2.webp" alt="Image 2">
           <div class="pet-info">
            <h3>Tetra Goldfish</h3>
            <p>Vitamin C enriched flakes for goldfishes (200g)</p>
            <p class="price">&#8377; 3,450</p>
            <button class="buy-now"><a href="Buypetsfoodfishes.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/fishes/3.webp" alt="Image 3">
           <div class="pet-info">
            <h3>Cichlid Gold</h3>
            <p>Higher Proteinn & Growth formulation and nutrient rich food</p>
            <p class="price">&#8377; 5,678</p>
            <button class="buy-now"><a href="Buypetsfoodfishes.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
        <div class="gallery-item">
          <img src="pet shop/fishes/6.webp" alt="Image 4">
           <div class="pet-info">
            <h3>TetraMin</h3>
            <p>Tropical Flakes for all type of fishes including vitamins (52gm)</p>
            <p class="price">&#8377; 4,600</p>
            <button class="buy-now"><a href="Buypetsfoodfishes.php" style="text-decoration: none; color: white;">Buy Now</a></button>
        </div>
        </div>
      </section>
     
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>The Pet Connection</h3>
                <p>Your trusted pet shop for all your pet needs!</p>
            </div>

            <div class="footer-section">
                <h4>Contact Us</h4>
                <p>Email: info@thepetconnection.com</p>
                <p>Phone: +1 800-123-4567</p>
                <p>Address: 123 Pet Street, Animal Town, India</p>
            </div>

            <div class="footer-section">
                <h4>Follow Us</h4>
                <ul class="social-links">
                    <li><a href="https://www.facebook.com/ThePetConnection" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/ThePetConnection" target="_blank">Instagram</a></li>
                    <li><a href="https://www.twitter.com/ThePetConnection" target="_blank">Twitter</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2025 The Pet Connection. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
