<?php
require './classes/dbconnector.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <title>EventHub</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- font link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>
    <body>
        <!-- header -->
        <header class="header">
            <a href="home.php" class="logo"><span>Event</span>Hub</a>
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#service">service</a>
                <a href="#about">about</a>
                <a href="#gallery">gallery</a>
                <a href="#package">package</a>
                <a href="#contact">contact</a>
                <a href="loginnnn.php">Login</a>

            </nav>
            <div id="menu-bar" class="fas fa-bars"></div>
        </header>

        <!-- home -->
        <section class="home" id="home">

            <div class="content">
                <h3>its time to celebrate! the best <span>event organizers </span></h3>
                <a href="#contact" class="btn">contact us</a>
            </div>

            <div class="swiper-container home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="image/slide1.jpg" alt="alt"/></div>
                    <div class="swiper-slide"><img src="image/slide2.jpg" alt="alt"/></div>
                    <div class="swiper-slide"><img src="image/slide3.jpg" alt="alt"/></div>
                    <div class="swiper-slide"><img src="image/slide4.jpg" alt="alt"/></div>
                    <div class="swiper-slide"><img src="image/slide5.jpg" alt="alt"/></div>
                    <div class="swiper-slide"><img src="image/slide6.jpg" alt="alt"/></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- service -->

        <section class="service" id="service" >
            <h1 class="heading">our <span>service</span></h1>

            <div class="box-container">

                <a href="profiles/profile.php">
                    <div class="box">
                        <i class="fa-solid fa-holly-berry"></i>
                        <h3> Decoration </h3>
                        <p> ithu oru project </p>
                    </div>
                </a>


                <a href="profiles/profile.php">
                    <div class="box">
                        <i class="fa-solid fa-camera"></i>
                        <h3> Studio </h3>
                        <p> ithu oru project </p>
                    </div>
                </a>

                <a href="profiles/profile.php">

                    <div class="box">
                        <i class="fa-solid fa-camera"></i>
                        <h3> Studio </h3>
                        <p> ithu oru project </p>
                    </div>
                </a>
                <a href="profiles/profile.php">
                    <div class="box">
                        <i class="fa-solid fa-utensils"></i>
                        <h3> Catering </h3>
                        <p> ithu oru project </p>
                    </div>
                </a>
                <a href="profiles/profile.php">
                    <div class="box">
                        <i class="fa-solid fa-headphones"></i>
                        <h3> Sound System </h3>
                        <p> ithu oru project </p>
                    </div>
                </a>
            </div>

        </section>

        <!-- about -->

        <section class="about" id="about">
            <h1 class="heading"><span>about </span>us</h1>
            <div class="row">
                <div class="imgae">

                    <img src="image/aboutus.jpg" alt=""/>
                </div>

                <div class="content">
                    <h3> we will give a very special celebration for you </h3>
                    <p>
                        Our decorators create unique and elegant events, 
                        transforming ordinary spaces into unforgettable experiences.
                        We partner with reputable hall owners to provide top-notch 
                        venues, catering services that tantalize taste buds with diverse culinary
                        delights, and skilled photographers capture the essence of every occasion, 
                        allowing clients to cherish memories for a lifetime.
                    </p>


                    <a href="#contact" class="btn"> contact us</a>

                </div>
            </div>
        </section>
        <!-- gallery -->
        <section class="gallery" id="gallery">
            <h1 class="heading">our <span>gallery</span></h1>

            <div class="box-container">
                <div class="box">
                    <img src="image/gallery1.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>



                <div class="box">
                    <img src="image/gallery2.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>



                <div class="box">
                    <img src="image/gallery3.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="image/gallery4.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="image/gallery5.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="image/gallery6.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="image/gallery7.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="image/gallery8.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="image/gallery9.jpg" alt=""/>
                    <h3 class="title"> photos and event</h3>
                    <div class="icon">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-share"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                </div>
            </div>
        </section>

        <!--price section start-->
        <section class="package" id="package">

            <h1 class="heading"> our <span>package</span> </h1>

            <div class= "box-container">

                <div class="box">
                    <h3 class="title">for birthdays</h3>
                    <h3 class="amount">100000</h3>
                    <ul>
                        <li><i class="fas fa -check"></i> full services</li>
                        <li><i class="fas fa -check"></i> decorations</li>
                        <li><i class="fas fa -check"></i> photos</li>
                        <li><i class="fas fa -check"></i> food and drinks</li>

                    </ul>
                    <a href="loginnnn.php" class="btn"> check out</a>
                </div>
                <div class="box">
                    <h3 class="title">for wedding</h3>
                    <h3 class="amount">1000000</h3>
                    <ul>
                        <li><i class="fas fa -check"></i> full services</li>
                        <li><i class="fas fa -check"></i> decorations</li>
                        <li><i class="fas fa -check"></i>music and photos</li>
                        <li><i class="fas fa -check"></i> food and drinks</li>
                        <li><i class="fas fa -check"></i> invitation card</li>
                    </ul>
                    <a href="loginnnn.php" class="btn"> check out</a>
                </div>
                <div class="box">
                    <h3 class="title">for concerts</h3>
                    <h3 class="amount">250000</h3>
                    <ul>
                        <li><i class="fas fa -check"></i> full services</li>
                        <li><i class="fas fa -check"></i> decorations</li>
                        <li><i class="fas fa -check"></i>music and photos</li>
                        <li><i class="fas fa -check"></i> food and drinks</li>
                        <li><i class="fas fa -check"></i> invitation card</li>
                    </ul>
                    <a href="loginnnn.php" class="btn"> check out</a>
                </div>
                <div class="box">
                    <h3 class="title">for others</h3>
                    <h3 class="amount">??</h3>
                    <ul>
                        <li><i class="fas fa -check"></i> full services</li>
                        <li><i class="fas fa -check"></i> decorations</li>
                        <li><i class="fas fa -check"></i>music and photos</li>
                        <li><i class="fas fa -check"></i> food and drinks</li>
                        <li><i class="fas fa -check"></i> invitation card</li>
                    </ul>
                    <a href="loginnnn.php" class="btn"> customize </a>
                </div>
            </div>

        </section>
        <!--package-->


        <!--contact section start-->
        <section class="contact" id="contact">
            <h1 class="heading"><span>Contact</span> Us</h1>
            <form action="contact.php" method="post">

                <div class="inputBox">

                    <input type="text" name="name" id="name" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="text" name="phone" id="phone" placeholder="Phone Number" maxlength="10" required>
                </div>
                <textarea name="message" id="message" cols="30" rows="5" placeholder="How can we help you?" required></textarea>
                <input type="submit" name="send" value="Send Message" class="btn">

            </form>

        </section>


        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>branches</h3>
                    <a href="#"><i class="fas fa-map-marker-alt"></i>vavuniya</a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#home"><i class="fas fa-arrow-right"></i>login</a>
                    <a href="#home"><i class="fas fa-arrow-right"></i>home</a>
                    <a href="#service"><i class="fas fa-arrow-right"></i>service</a>
                    <a href="#about"><i class="fas fa-arrow-right"></i>about</a>
                    <a href="#gallery"><i class="fas fa-arrow-right"></i>gallery</a>
                    <a href="#package"><i class="fas fa-arrow-right"></i>package</a>

                    <a href="#contact"><i class="fas fa-arrow-right"></i>contact</a>

                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i>0776383203</a>
                    <a href="#"><i class="fas fa-phone"></i>0771234567</a>
                    <a href="#"><i class="fa fa-envelope"></i>eventhub@gmail.com</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="#"><i class="fab fa-instagram"></i>instagram</a>

                </div>



            </div>

            <div class="credit">created by <span>group 14 </span>all right reserved</div>
        </section>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="script.js"></script>

        <script src="https://smtpjs.com/v3/smtp.js"></script>

    </body>
</html>
