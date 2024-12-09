<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>


            @import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,600;6..12,700&display=swap');

            :root{
                --main-color:#3867d6;
            }

            *{
                font-family: 'Nunito Sans', sans-serif;
                margin: 0;
                padding: 0;
                outline: none;
                border: none;
                text-decoration: none;
                text-transform: capitalize;
                transition: 1s linear;
            }

            html{
                font-size: 62.5%;
                overflow-x: hidden;
                scroll-padding-top: 7rem;
                scroll-behavior: smooth;

            }

            body{
                background: #222;
                justify-content: center;
                width: 90%;
            }

            section{
                padding: 2rem 11%;

            }

            .heading span{
                color: #3867d6;
                text-transform: uppercase;
            }


            .header{
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 10000;
                background: #333;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 1.5rem 9%;
            }
            .header .logo{
                font-weight: bolder;
                color: #fff;
                font-size: 2.5rem;
            }
            .header .logo span{
                color: var(--main-color);
            }
            .header .navbar a{
                font-size: 1.7rem;
                color: #fff;
                margin-left: 2rem;
            }
            .header .navbar a:hover{
                color: var(--main-color);
            }

            #menu-bar{
                font-size: 3rem;
                color: #fff;
                cursor: pointer;
                display: none;
            }


            .profile-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
                padding: 20px;
                margin-top: 80px;
                margin-left: 200px;
            }

            .profile-container a{
                text-decoration: none;
                color: #000;
            }

            .profile-box {
                width: 250px;
                background-color: #ffffff;
                border: 1px solid #ccc;
                border-radius: 8px;
                padding: 20px;
                text-align: center;
                cursor: pointer;
                transition: transform 0.2s;
                margin-bottom: 20px;
            }

            .profile-box:hover {
                transform: scale(1.05);
            }

            .profile-box img {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                margin-bottom: 10px;
                box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
            }

            .name {
                font-size: 18px;
                font-weight: bold;
            }

            .rating {
                font-size: 14px;
                color: #999;
            }

            .checked {
                color: orange;
            }
        </style>
    </head>

    <body>

        <!-- header -->
        <header class="header">
            <a href="home.php" class="logo"><span>Event</span>Hub</a>
            <nav class="navbar">

                <a href="../home.php">home</a>
                <a href="../home.php.#service">service</a>
                <a href="../home.php.#about">about</a>
                <a href="../home.php.#gallery">gallery</a>
                <a href="../home.php.#package">package</a>
                <a href="../home.php.#contact">contact</a>
                <a href="../home.php.#login">Login</a>

            </nav>
            <div id="menu-bar" class="fas fa-bars"></div>
        </header>


        <div class="profile-container">
            <a href="../view/viewuser.php">
                <div class="profile-box">

                    <img src="../image/mathurjan.jpg" alt="profile">
                    <h3>Mathurjan</h3>
                    <h2>3.0</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </a>
            <a href="../view/viewuser.php">
                <div class="profile-box">
                    <img src="../image/profile2.jpeg" alt="profile">
                    <h3>Mrs. Shalini</h3>
                    <h2>4.5</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </a>
            <a href="../view/viewuser.php">
                <div class="profile-box">
                    <img src="../image/profile3.jpg" alt="profile2">
                    <h3>Mr. Ramesh</h3>
                    <h2>3.5</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </a>
            <a href="../view/viewuser.php">
                <div class="profile-box" >
                    <img src="../image/profile4.jpg" alt="profile">
                    <h3>Mrs. Manohary</h3>
                    <h2>3.2</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </a>
            <a href="../view/viewuser.php">
                <div class="profile-box">
                    <img src="../image/profile5.jpeg" alt="profile">
                    <h3>Mrs. Manohary</h3>
                    <h2>3.2</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </a>
            <a href="../view/viewuser.php">
                <div class="profile-box">
                    <img src="../image/profile6.jpeg" alt="profile">
                    <h3>Mrs. Manohary</h3>
                    <h2>3.2</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </a>
            <a href="../view/viewuser.php">
                <div class="profile-box">
                    <img src="../image/profile7.jpeg" alt="profile">
                    <h3>Mrs. Manohary</h3>
                    <h2>3.2</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </a>
            <a href="../view/viewuser.php">
                <div class="profile-box">
                    <img src="../image/profile8.jpeg" alt="profile">
                    <h3>Mrs. Manohary</h3>
                    <h2>3.2</h2>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
            </a>

        </div>
    </body>
</html>
