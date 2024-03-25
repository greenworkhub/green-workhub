<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/png">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <title>GREEN WORKHUB</title>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">GREEN WORKHUB</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>
                        
                        
                        <a href="logout.php" class="nav__link">logout</a>
                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

               
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
               <center><img src="pic.jpg" alt="" class="home__img" style="background-size:cover"></center>
< 
                <div class="home__container container grid">
                    <div class="home__data">
                        <div class="workhub">
                            <h1><b>WELCOME</b></h1>
                        </div> 
                        <h1 class="home__data-titles" style="text-transform: uppercase; font-size: 80px;"><span><?php echo $_SESSION['user_name'] ?></h6>                      
                        <h1 class="home__data-title">Explore The <br> Nature</b></h1>
                        <a href="#" class="button">Explore the nature</a>

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="blank" class="home_social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="blank" class="home_social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="blank" class="home_social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                    <div class="home__info">
                        <div class="home__info-overlay">
                            <img height="500px" width="500px" src="ccc.png">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section_title about_title">More Information <br> About GREENWORKHUB</h2>
                        <p class="about__description">At Green Work Hub, we believe in the power of community-driven change. Our journey began with a simple yet profound idea: to create a platform that brings people together in their shared commitment to sustainability. We are on a mission to connect individuals with local events and workshops that inspire positive environmental action <br> Your world becomes clear once you understand how the universe influences it.
                        </p>
                        <a href="#about.html" class="button">Learn More</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="tree.jpeg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="rec.jpeg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
           
    

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">2</h2>
                            <span class="experience__description">Year <br> Experience</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">75</h2>
                            <span class="experience__description">Complete <br>workshops</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">650+</h2>
                            <span class="experience__description">Total <br> volunteer</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="plant.jpeg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="work.jpeg" alt="" class="experience__img-two">
                        </div>
                      
                </div>
            </section>

           
            
            <section class="place section" id="place">
                <h2 class="section__title"></h2>
                <div class="container2">
                 
                <body>
    <center>
    
        <div class="main">
    
            <div class="Events">
                <img src="even.jpeg" style="height: 350px; width: 350px;">
                <a href="cal.html"><h3>Events</h3></a>
        
            </div>
            <div class="volunteering">
        <img src="vol.webp" style="height: 350px; width: 350px;">
        <a href="volunteer.html"><h3>Volunteering</h3></a>
            </div>
            <div class="donation">
                <img src="dona.jpeg" style="height: 350px; width: 350px;">
                <a href="don.html"><h3>Donation</h3></a>
        
            </div>
        </div>
    </center>
</body>


                 
                 </div>
                 

                
            <!--==================== SUBSCRIBE ====================-->
            <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section_title subscribe_title">Subscribe Our <br> Newsletter</h2>
                        <p class="subscribe__description">Subscribe to our newsletter and get a daily updates.
                        </p>
    
                        <form action="" class="subscribe__form">
                            <input type="text" placeholder="Enter email" class="subscribe__input">
    
                            <button class="button">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </section>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">GREEN WORKHUB</h3>
                        <p class="footer__description">Empowering communities for a sustainable future. At the heart of Green Work hub a commitment to fostering sustainable living practices. We envision a world where every individual plays a part in creating a healthier planet. By connecting you with local sustainability events and workshops, we strive to make eco-friendly living accessible and enjoyable.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="blank" class="footer_social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="blank" class="footer_social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="blank" class="footer_social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="blank" class="footer_social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="#about" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="#discover" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="map">
                        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.669434395343!2d73.12509517520321!3d18.990200982196804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel%20(Autonomous)!5e0!3m2!1sen!2sin!4v1710656000178!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2024 GREENWORKHUB. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>
        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        
    </body>
</html>