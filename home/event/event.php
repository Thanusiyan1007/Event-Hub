<!DOCTYPE html>
<html>
    <head>
        <title>Event Customizing Form</title>
       <!--/*<link rel="stylesheet" href="event.css"*/>*/-->
              </head>
    <body>
        <div class="container">
            <h1>EVENT CUSTOMIZING FORM</h1>
            <p>Choose your favorites</p>
            <form id="event-form">
                <label>Event Type:</label><br>
                <input type="radio" name="event-type" value="wedding"> Wedding<br>
                <input type="radio" name="event-type" value="birthday"> Birthday<br>
                <input type="radio" name="event-type" value="anniversary"> Anniversary<br>
                <input type="radio" name="event-type" value="concert"> Concert<br>
                <input type="radio" name="event-type" value="other"> Other<br>

                <label>Date:</label><br>
                <input type="date" name="event-date"><br>

                <label>Start Time:</label>
                <input type="time" name="start-time">
                <label>End Time:</label>
                <input type="time" name="end-time"><br>


                <label>Maximum Number of Participants:</label><br>
                <input type="number" name="max-participants"><br>

                <label>Select Hall:</label><br>
                <select name="hall">
                    <option value="hall1">Hall 1</option>
                    <option value="hall2">Hall 2</option>
                    <option value="hall3">Hall 3</option>
                </select><br>

                <label>Select Decoration:</label><br>
                <select name="decoration">
                    <option value="d1">D1</option>
                    <option value="d2">D2</option>
                    <option value="d3">D3</option>
                </select><br>

                <label>Add a Photo:</label><br>
                <input type="file" name="photo"><br>

                <label>Comment about Decoration:</label><br>
                <textarea name="decoration-comment"></textarea><br>

                <label>Select Studio:</label><br>
                <select name="studio">
                    <option value="s1">S1</option>
                    <option value="s2">S2</option>
                    <option value="s3">S3</option>
                </select><br>

                <label>Select Catering:</label><br>
                <select name="catering">
                    <option value="c1">C1</option>
                    <option value="c2">C2</option>
                    <option value="c3">C3</option>
                </select><br>

                <label>Select Sound:</label><br>
                <select name="sound">
                    <option value="a1">A1</option>
                    <option value="a2">A2</option>
                    <option value="a3">A3</option>
                </select><br>

                <div class="form-field">
                    <div class="">
                        <b>Catering</b>

                        <script>
                            function showItem(selectedItem) {
                                var item1 = document.getElementById('item1');
                                var item2 = document.getElementById('item2');
                                var item3 = document.getElementById('item3');

                                item1.style.display = 'none';
                                item2.style.display = 'none';
                                item3.style.display = 'none';

                                if (selectedItem === 'item1') {
                                    item1.style.display = 'block';
                                } else if (selectedItem === 'item2') {
                                    item2.style.display = 'block';
                                } else if (selectedItem === 'item3') {
                                    item3.style.display = 'block';
                                }
                            }
                        </script>


                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="delivery people"
                                onchange="showItem(this.value)">
                            <option value="item1">Mrs Ratnayaka</option>
                            <option value="item2">Mrs Shalini</option>
                            <option value="item3">Mr Ramesh</option>
                            <option value="item3">Mrs Manohary</option>
                        </select>

                        <div id="item1" style="display: none;">
                            <!-- Content for Item 1 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Briyani" id="Briyani">
                                <label class="form-check-label" for="Briyani">
                                    Briyani
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Pizza" id="Pizza">
                                <label class="form-check-label" for="Pizza">
                                    Pizza
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="burger" id="burger" checked>
                                <label class="form-check-label" for="burger">
                                    burger
                                </label>
                            </div>
                        </div>

                        <div id="item2" style="display: none;">
                            <!-- Content for Item 2 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Pizza" id="Pizza">
                                <label class="form-check-label" for="Pizza">
                                    Pizza
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Ice Cream" id="Ice Cream" checked>
                                <label class="form-check-label" for="Ice Cream">
                                    Ice Cream
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="tacos" id="tacos" checked>
                                <label class="form-check-label" for="tacos">
                                    tacos
                                </label>
                            </div>
                        </div>

                        <div id="item3" style="display: none;">
                            <!-- Content for Item 3 -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Noodles" id="Noodles">
                                <label class="form-check-label" for="Noodles">
                                    Noodles
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Briyani" id="Briyani">
                                <label class="form-check-label" for="Briyani">
                                    Briyani
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="sushi" id="sushi" checked>
                                <label class="form-check-label" for="sushi">
                                    sushi
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>


    </body>
</html>
