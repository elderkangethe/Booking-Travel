<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<section class="header">

    <a href="home.php" class="logo">travel.</a>

<div class="navbar">
    <a href="home.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="package.php">Package</a>
    <a href="book.php">Book</a>
</div>

<div id="menu-btn"  class="fas fa-bars"></div>
</section>


<div class="heading"  style="background: url(images/travel-p2.jpg);">
    <h1>Book Now</h1>
</div>

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form method="post" action="book_form.php" class="book-form">
        <div class="flex">
            <div class="inputbox">
                <span>Name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputbox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputbox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>

            <div class="inputbox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputbox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputbox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputbox">
                <span>Arrivals :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputbox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>















<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick links</h3>
    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
    <a href="about.php"><i class="fas fa-angle-right"></i>About Us</a>
    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
    <a href="#"><i class="fas fa-angle-right"></i>about us</a>
    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
    <a href="#"><i class="fas fa-phone"></i>+24740848915</a>
    <a href="#"><i class="fas fa-phone"></i>+24740848915</a>
    <a href="#"><i class="fas fa-envelope"></i>njorogekangethe98@gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>Nairobi, Kenya</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>
    </div>

    <div class="credit">created by <span>Emitech designer</span>| all rights reserved!</div>
</section>
    
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>