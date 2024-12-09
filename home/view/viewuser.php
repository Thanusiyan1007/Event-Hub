<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Business Profile Viewer</title>
        <link rel="stylesheet" href="viewuser.css">
    </head>
    <body>
        <div class="container">
            <h1>Business Profile</h1>

            <div class="profile">
                <div class="profile-picture">
                    <img src="../image/mathurjan.jpg" alt="Profile Picture">
                </div>
                <div class="profile-details">
                    <h2>T.Mathuran</h2>
                    <p>Studio</p>
                </div>
                <div class="raat">
                    <div class="rating">
                        <span class="star" data-rating="1">&#9733;</span>
                        <span class="star" data-rating="2">&#9733;</span>
                        <span class="star" data-rating="3">&#9733;</span>
                        <span class="star" data-rating="4">&#9733;</span>
                        <span class="star" data-rating="5">&#9733;</span>
                    </div>
                    <div class="selected-rating">0 stars</div>
                </div>

                <form action="../rating/save_rating.php" method="post" id="rating-form">
                    <input type="hidden" name="rating" id="rating" value="0">
                    <input type="submit" value="Submit">
                </form>

                <script>
                    function rate(rating) {
                        document.getElementById("rating").value = rating;
                        document.querySelector(".selected-rating").innerText = rating + " stars";
                    }
                </script>
            </div>




            <div class="description">
                <h2>Description</h2>
                <p>
                    welcome 
                </p>
            </div>

            <div class="price">
                <h2>Service</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Features</th>
                            <th>Prices</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Phtography</td>
                            <td>10000</td>
                        </tr>
                        <tr>
                            <td>Album</td>
                            <td>200000</td>
                        </tr>
                        <tr>
                            <td>Videography</td>
                            <td>300000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="image-gallery">
                <h2>Image Gallery</h2>
                <div class="gallery">
                    <img src="../image/d1.jpg" alt="">
                    <img src="../image/d2.jpg" alt="">
                    <img src="../image/d3.jpg" alt="">
                    <img src="../image/d4.jpg" alt="">
                    <img src="../image/d5.jpg" alt="">
                    <img src="../image/b1.jpg" alt="">
                    <img src="../image/b2.jpeg" alt="">
                    <img src="../image/b3.jpeg" alt="">
                    <img src="../image/b4.jpeg" alt="">
                </div>
            </div>
        </div>
    </body>
    <script>
        const stars = document.querySelectorAll('.star');
        const selectedRating = document.querySelector('.selected-rating');

        stars.forEach((star) => {
            star.addEventListener('click', () => {
                const rating = parseInt(star.getAttribute('data-rating'));
                selectedRating.textContent = rating + ' stars';

                // Reset all stars' color
                stars.forEach((s) => {
                    if (parseInt(s.getAttribute('data-rating')) <= rating) {
                        s.style.color = 'gold';
                    } else {
                        s.style.color = 'gray';
                    }
                });
            });
        });

    </script>
</html>