<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="./CSS/style.css" type="text/css">

    
    
    
</head>

<body>
    <!-- header section starts  -->
<section class="header">

    <a href="home.php" class="logo">traveler</a>
    <nav class="navbar">
        <a href="home.php" class="home">home</a>
        <a href="about.php" class="about">about</a>
        <a href="package.php" class="package">package</a>
        <a href="book.php" class="book">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
    <!-- header section ends  -->


<div class="heading" style="background:url(IMAGES/header-bg-3.jpg) no-repeat">
    <h3>book now</h3>
</div>

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name: </span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email: </span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone: </span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            
            <div class="inputBox">
                <span>address: </span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
                <span class="opt">Type of travel you want: </span>
                <select id="places" name="place">
                    <option value="intl">International</option>
                    <option value="country">Within Country</option>
                </select>
            </div>

            <div class="inputBox">
                <span>where to : </span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many : </span>
                <input type="number" placeholder="number of guests" name="guests" id="guests_no">
            </div>
            <div class="inputBox">
                <span>arrivals : </span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving : </span>
                <input type="date" name="leaving">
            </div>

            
            
        </div>

        

        

        <input type="submit" value="submit" class="bn" name="send" >

    </form>
</section>


<div class="booking-2">
    
    <div class="book-form-2">
        
        <div class="flex-2"></div>
        <div> *for international trip , approximate cost of travel per person is Rs 80000</div>
        <div> *for within country trip , approximate cost of travel per person is Rs 25000</div>
        <div class="flex-2"></div>
        <button onclick="calculate()"> Calculate The Travel of Cost </button>
        
        <div class="flex-2"></div>
    
        <p id="result"></p>
        <div class="flex-2"></div>
    </div>
</div>
        






    <!-- footer section starts -->
<section class="footer">

<div class="box-container">

    <div class="box">

    <h3>quick-links</h3>
    <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
    <a href="about.php"> <i class="fas fa-angle-right"></i>about</a>
    <a href="package.php"> <i class="fas fa-angle-right"></i>package</a>
    <a href="book.php"> <i class="fas fa-angle-right"></i>book</a>

    </div>

    <div class="box">
        
    <h3>extra links</h3>
    <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
    <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
    <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
    <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
    

    </div>

    <div class="box">
        
    <h3>contact info</h3>

    <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
    <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
    <a href="#"> <i class="fas fa-envelope"></i>ghoshsoumyadeep44@gmail.com</a>
    <a href="#"> <i class="fas fa-map"></i> kharagpur, india - 721302</a>

    </div>

    <div class="box">
        
    <h3>follow us</h3>

    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>

    </div>

</div>

<div class="credit"> created by <span> Soumyadeep Ghosh</span> | all rights reserved!</div>

</section>


    <!-- footer section ends  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>



</body>
</html>