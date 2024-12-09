<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="payment.css">

    </head>
    <body>

        <div class="container">

            <form action="">

                <div class="row">

                    <div class="col">

                        <h3 class="title">billing address</h3>

                        <div class="inputBox">
                            <span>full name :</span>
                            <input type="text" placeholder="leo">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="example@example.com">
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="room - street - locality">
                        </div>
                        <div class="inputBox">
                            <span>city :</span>
                            <input type="text" placeholder="vavuniya">
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>district :</span>
                                <input type="text" placeholder="vavuniya">
                            </div>
                            <div class="inputBox">
                                <span>zip code :</span>
                                <input type="text" placeholder="123456">
                            </div>
                        </div>

                    </div>

                    <div class="col">

                        <h3 class="title">payment</h3>

                        <div class="inputBox">
                            <span>cards accepted :</span>
                            <img src="../image/card_img1.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>name on card :</span>
                            <input type="text" placeholder="mr.thanushiyan">
                        </div>
                        <div class="inputBox">
                            <span>credit card number:</span>
                            <input type="text" id="creditCardInput" placeholder="1111-2222-3333-4444" oninput="formatCreditCardNumber()">
                        </div>
                        <div class="inputBox">
                            <span>exp month :</span>
                            <select name="month">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>

                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>exp year :</span>
                                <input type="text" placeholder="2022">

                            </div>
                            <div class="inputBox">
                                <span>CVV:</span>
                                <input type="text" id="cvvInput" placeholder="****" maxlength="4" oninput="validateCVV()">
                            </div>
                        </div>

                    </div>

                </div>

                <input type="submit" value="proceed to checkout" class="submit-btn">

            </form>

        </div>   
        <script>
            function formatCreditCardNumber() {
                let input = document.getElementById('creditCardInput');
                let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters

                if (value.length > 16) {
                    value = value.slice(0, 16); // Ensure only 16 digits are used
                }

                // Format the value into four groups of four digits
                let formattedValue = value.replace(/(\d{4})(?=\d)/g, '$1-');

                input.value = formattedValue;
            }
            function validateCVV() {
                let cvvInput = document.getElementById('cvvInput');
                let cvvValue = cvvInput.value.replace(/\D/g, ''); // Remove non-numeric characters

                // Check if CVV is either 3 or 4 digits long
                if (!/^\d{3,4}$/.test(cvvValue)) {
                    cvvInput.setCustomValidity('CVV must be 3 or 4 digits long.');
                } else {
                    cvvInput.setCustomValidity('');
                }
            }

        </script>

    </body>
</html>