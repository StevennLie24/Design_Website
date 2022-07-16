<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vortech Indonesia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
@include('components.navbar')


<header class="header">

    <a href="#" class="logo">
        <img src="images/logo.png" width="130px" height="400px" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">products</a>
        <a href="#products">menu</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="{{asset('login')}}">sign in</a>
        <a href="">checkout</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>  

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="greet">
        <h3>Great Tools Can Improve Your Work</h3>
        <p>Grab Some And Boost Your Productivity!</p>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/logo.png" alt="">
        </div>

        <div class="content">
            <h3>Vortech</h3>
            <p>In 2017 until now, along with the development of the online marketplace, Vortech Indonesia penetrated the market and soon will expand our store to LAZADA, BLIBLI, TOKOPEDIA, BUKALAPAK, and SHOPEE as official their merchant partners for computer hardwares such as Monitor, Ram and more. And from then we always do our best to provide a good quality product and also affordable prices as well.</p>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>product</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/menu-1.png" alt="">
            <h3>SSD 128GB RX7</h3>
            <div class="price">Rp 179.000 <span>Rp 220.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-2.png" alt="">
            <h3>SSD Midasforce 512GB</h3>
            <div class="price">Rp 540.000 <span>Rp 580.000</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-3.png" alt="">
            <h3>Sades Oculus S30 Dual Mode</h3>
            <div class="price">Rp 325.000 <span>Rp 340.000</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-4.png" alt="">
            <h3>Logitech G102</h3>
            <div class="price">Rp 220.000 <span>Rp 255.000</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-5.png" alt="">
            <h3>CPU Aero CS-107 CORE i5</h3>
            <div class="price">Rp 1.790.000 <span>Rp 1.840.000</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/menu-6.png" alt="">
            <h3>LG 24 LED 24GN600-B</h3>
            <div class="price">Rp 2.645.000 <span>Rp 2.700.000</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> new <span>release</span> </h1>

    <div class="box-container">

        <div class="box">           
            <div class="image">
                <img src="images/product-1.png" alt="">
            </div>
            <div class="content">
                <h3>ASUS TUF Gaming VG279QL1A HDR</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp 4.599.000 <span>Rp 4.600.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-2.png" alt="">
            </div>
            <div class="content">
                <h3>Steelseries Rival 5 - Gaming Mouse</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp 850.000 <span>Rp 870.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/product-3.png" alt="">
            </div>
            <div class="content">
                <h3>Corsair SSD MP400 2TB NVMe PCIe M.2</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp 4.280.000 <span>Rp 4.350.000</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>We’re going to be able to ask our computers to monitor things for us, and when certain conditions happen, are triggered, the computers will take certain actions and inform us after the fact.</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>Robert Downey Jr.</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Computers are very reactive but they’re not proactive. They are very reactive. They don’t need an assistant. I think we have all the material in the world to solve this problem; it’s just being deployed in other places.</p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>Norman Reedus</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>A computer is the most incredible tool we’ve ever seen. It can be a writing tool, a communications center, a super calculator, a planner, a filer and an artistic instrument all in one</p>
            <img src="images/pic-3.png" class="user" alt="">
            <h3>Johnny Depp</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>
    
    <div class="row">

    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d42878.89566039119!2d112.6981988545502!3d-7.264360180501918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f944808906ff%3A0xb49024a3b07c8918!2sBG%20Junction%20Surabaya!5e0!3m2!1sen!2sin!4v1657875706841!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   

         <form action="">
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">products</a>
        <a href="#products">menu</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#signin">sign in</a>
    </div>

    <div class="credit">Copyright © 2022 <span>Vortech Indonesia</span> | all rights reserved</div>

</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/app.js"></script>

</body>
</html>