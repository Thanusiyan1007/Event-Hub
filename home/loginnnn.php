<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <style>
            html ,body {
                width: 100%;
                height: 100%;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                background: url('image/photob.jpg') no-repeat; /* Optional background color for the entire page */
                background-size: cover;
            }

            .select {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
                padding: 20px;
                margin-top: 80px;
            }
            
            .select a{
                text-decoration: none;
            }

            .user {
                
                width: 250px;
                background-color: transparent;
                backdrop-filter: blur(10px);
                border: 2px solid #ccc;
                border-radius: 8px;
                padding: 20px;
                text-align: center;
                cursor: pointer;
                transition: transform 0.2s;
                margin-bottom: 20px;
            }
            .user:hover{
                transform: scale(1.05);
            }
            
            .user h2{
                color: #fff;
                
            }

            .user img {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                margin-bottom: 10px;
                box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.2);
                
            }
            
            .user img:hover {
                transform: scale(1.05);
            }


        </style>

    </head>
    <body>
        <div class="select">
            <a href="../login.php">
                <div class="user">
                    <img src="image/profile6.jpeg" alt="alt"/>
                    <h2> User </h2>
                </div>
            </a>
            <a href="../login_delar.php">
                <div class="user">
                    <img src="image/bus.png" alt="alt"/>
                    <h2> Business people </h2>
                </div>
            </a>

        </div>
    </body>
</html>
