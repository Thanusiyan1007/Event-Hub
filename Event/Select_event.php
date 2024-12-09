<?php
$message = null;
if (isset($_GET["status"])) {
    $status = $_GET["status"];
    if ($status == 0) {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>Required values were not submitted</h5>";
    } elseif ($status == 1) {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>You must fill all fileds to register for form</h5>";
    } elseif ($status == 2) {
        $message = "<h5 style='width: 100%;height: 100%;background: #00aa00;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>Your form is Submitted</h5>";
    } else {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>Error ocurred during the registration. please try again</h5>";
    }
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Event Customizing Form</title>
    <link rel="stylesheet" href="nithi.css">
</head>
<body>
    <div class="container">
        <div class="message">
            <?= $message ?>
        </div>
        <div class="head">
            <h1>EVENT CUSTOMIZING FORM</h1>
            <p>Choose your favorites</p>
        </div>
        
        <div class="form">
            <form action="Select_eventback.php" method="POST">
                <label class="name">Username:</label>
                <input type="text" name="username"><br>
                <label>Event Type:</label>
                <div class="input-box">
                    <input type="radio" name="event_type" value="wedding"> Wedding<br>
                    <input type="radio" name="event_type" value="birthday"> Birthday<br>
                    <input type="radio" name="event_type" value="anniversary"> Anniversary<br>
                    <input type="radio" name="event_type" value="concert"> Concert<br>
                </div>

                <label>Date:</label>
                <input id="date" type="date" name="event_date"><br>

                <label>Start Time:</label>
                <input id=""type="time" name="start_time">
                <label>End Time:</label>
                <input type="time" name="end_time"><br>
                
                
                <div class="mnp">
                <label>Maximum No of Participants:</label>
                <input type="number" name="max_participants"><br>
                </div>

                <label>Select Hall:</label>
                <select name="hall">
                    <option value="hall_1">Hall 1</option>
                    <option value="hall_2">Hall 2</option>
                    <option value="hall_3">Hall 3</option>
                </select><br>

                <label>Select Decoration:</label>
                <select name="decoration">
                    <option value="Decoration_1">Decoration 1</option>
                    <option value="Decoration_2">Decoration 2</option>
                    <option value="Decoration_3">Decoration 3</option>
                </select><br>
                
                <div class="add">
                    <label>Add a Photo:</label>
                    <input type="file" name="photo"><br>
                </div><br>

                <label>Comment about Decoration:</label><br><br>
                <textarea name="decoration_comment"></textarea><br>

                <label>Select Studio:</label>
                <select name="studio">
                    <option value="Studio_1">Studio 1</option>
                    <option value="Studio_2">Studio 2</option>
                    <option value="Studio_3">Studio 3</option>
                </select><br>

                <label>Select Catering:</label>
                <select name="catering">
                    <option value="Catering_1">Catering 1</option>
                    <option value="Catering_2">Catering 2</option>
                    <option value="Catering_3">Catering 3</option>
                </select><br>

                <label>Select Sound:</label>
                <select name="sound">
                    <option value="Sound_1">Sound 1</option>
                    <option value="Sound_2">Sound 2</option>
                    <option value="Sound_3">Sound 3</option>
                </select><br><br>

                <input type="submit" name="Submit" value="Submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>