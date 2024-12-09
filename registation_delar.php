<?php
$message = null;
if (isset($_GET["status"])) {
    $status = $_GET["status"];
    if ($status == 0) {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>Required values were not submitted</h5>";
    } elseif ($status == 1) {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>You must fill all fileds to register with EventHub</h5>";
    } elseif ($status == 2) {
        $message = "<h5 style='width: 100%;height: 100%;background: #00aa00;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>You have sucessfully registered with EventHub</h5>";
    } elseif(($status == 3)) {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>Error ocurred during the registration. please try again</h5>";
    }elseif (($status == 4)) {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>Nic Must 12 characters</h5>";
    }else{
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>Phone Number Must 10 characters</h5>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Registration</title>
    </head>

    <body>
        <div class="form-container">
            <form action="signup_delar.php" method="POST">
                <h1>
                    Registration Form
                </h1>
                <?= $message ?>
                <div class="input-box">
                    <input type="text" name="Fullname" value="" placeholder="Full Name" required>
                    <i class="lar la-user"></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" value="" placeholder="Email" required>
                    <i class="las la-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="username" value="" placeholder="User Name" required>
                    <i class="lar la-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" value="" placeholder="Password" required>
                    <i class="las la-key"></i>
                </div>
                <div class="input-box">
                    <input type="text" name="NIC" value="" placeholder="NIC" required>
                    <i class="las la-id-card"></i>
                </div>
                <div class="input-box">
                    <input type="tel" name="Phone" value="" placeholder="Phone Number" required>
                    <i class="las la-phone"></i>
                </div>
                <div class="input-box">
                    <select name="businesstype" style="width: 100%;height: 49px;border-radius: 25px;">
                        <option value="Hall Owner">Hall Owner</option>
                        <option value="Decorator">Decorator</option>
                        <option value="Photographer">Photographer</option>
                        <option value="Catering Service">Catering Service</option>
                        <option value="Sound Service">Sound Service</option>
                    </select>

                </div>
                <input type="submit" name="Register" value="Registrater" class="btn">
            </form>
            <br>
            <div>
                <a href="login_delar.php"><input type="submit" name="backtosigin" value="back to sigin" class="btn"></a>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>