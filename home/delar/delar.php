<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busniess people View</title>
    <link rel="stylesheet" href="delar.css">
    <script src="delar.js"></script>
</head>
<body>
    <div class="container">
        <form>
            <div class="details">
                <img class="circular--square" id="profile-pic" src="../image/mathurjan.jpg" alt="Profile Picture" onclick="openPopup()" />

                <div class="popup-overlay" id="popup" onclick="closePopup()">
                    <div class="popup-content">
                        <input type="file">
                        <button onclick="closePopup()">Close</button>
                    </div>
                </div>

                <div class="profiledetails">
                    <div class="profilename">
                        <input type="text" placeholder="T.Mathuran">
                    </div>
                    <div class="profiletype">
                        <select name="Profile-type" id="Profile-type">
                            <option value="Hall">Hall</option>
                            <option value="Decoration">Decoration</option>
                            <option value="Catering">Catering</option>
                            <option value="Sound-Sytem">Sound Sytem</option>
                            <option value="Studio">Studio</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="description">
                <textarea class="rounded-textarea"
                placeholder="Welcome To RAJ MAHAL...........
                At Here , We Transform Dreams Into Unforgettable Memories. Our Enchanting Venue Provides The Perfect Backdrop For Your Special Day, Whether It's An Intimate Ceremony Or A Grand Celebration. Our Elegant And Versatile Hall Is Designed To Cater To All Your Wedding Needs."></textarea>
            </div>
            <div class="price">
                <h3>
                    Service
                </h3>
                <table>
                    <thead>
                        <tr>
                            <th>Features</th>
                            <th>Prices</th>
                        </tr>
                    </thead>
                    <tbody id="service-table">
                        <tr>
                            <td><input type="text" name="Features" id="" placeholder="Phtography"></td>
                            <td><input type="number" name="Prices" id="" placeholder="10000"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="Features" id="" placeholder="Album"></td>
                            <td><input type="number" name="Prices" id="" placeholder="200000"></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="Features" id="" placeholder="Videography"></td>
                            <td><input type="number" name="Prices" id="" placeholder="300000"></td>
                        </tr>
                    </tbody>
                </table>
                <button onclick="openPopup1()">Add Table Row</button>
            </div>

            <div class="popup-overlay" id="popup1">
                <div class="popup-content">
                    <h3>Add New Row</h3>
                    <form id="add-row-form">
                        <label for="new-feature">Feature:</label>
                        <input type="text" id="new-feature" name="new-feature" required><br>
                        <label for="new-price">Price:</label>
                        <input type="number" id="new-price" name="new-price"  required><br>
                        <button type="button"  onclick="addTableRow()" class="green">Add Table Row</button>
                        <button type="button" onclick="closePopup1()">Cancel</button>
                    </form>
                </div>
            </div>

            <div class="imageupload-gallary">
                <table>
                    <tbody>
                        <tr>
                            <td><img src="../image/d1.jpg" alt=""></td>
                            <td><img src="../image/d2.jpg" alt=""></td>
                            <td><img src="../image/d3.jpg" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../image/d4.jpg" alt=""></td>
                            <td><img src="../image/d5.jpg" alt=""></td>
                            <td><img src="../image/d1.jpg" alt=""></td>
                        </tr>
                    </tbody>
                </table>
                <button onclick="openPopup2()">Add Panel</button>

                <div class="popup-overlay" id="popup2" onclick="closePopup2()">
                    <div class="popup-content">
                        <input type="file">
                        <button onclick="closePopup2()">Close</button>
                    </div>
                </div>
            </div>

            <div class="submit">
                <button>submit</button>
            </div>
            
        </form>
    </div>
</body>
</html>