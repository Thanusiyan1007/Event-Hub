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
<html>
    <head>
        <meta charset="UTF-8">
        <title>DashBoard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- comment -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link rel="stylesheet" href="../style_1.css" type="text/css">
    </head>
    <body>

        <!--start right-menu-->
        <div class="headerandmenubar">
            <div class="right-menu">
                <div class="menubar-heading-title">
                    <h3>Event <span id="menu-title-color">Hub</span></h3>
                </div>
                <hr>
                <div class="menubar-heading-details">
                    <a href="dashboard.php">
                        <div class="menubar-opt">
                            <div class="op1">
                                <i class="lab la-buromobelexperte"></i>
                                <span>Dashoboard</span>
                            </div>
                        </div>
                    </a>
                    <a href="EventManagement.php">
                        <div class="menubar-opt">

                            <div class="op2">
                                <i class="las la-calendar"></i>
                                <span>Event Management</span>
                            </div>
                        </div>
                    </a>
                    <a href="Dealers Customize.php">
                        <div class="menubar-opt">
                            <div class="op3">
                                <i class="las la-people-carry"></i>
                                <span>Dealers Customize</span>
                            </div>
                        </div>
                    </a>
                    <a href="UserCustomize.php">
                        <div class="menubar-opt">
                            <div class="op4">
                                <i class="las la-users"></i>
                                <span>User Customize</span>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <h4></h4>
                    <a href="galarymenagment.php">
                        <div class="menubar-opt">
                            <div class="op5">
                                <i class="las la-camera-retro"></i>
                                <span>Gallery Manage</span>
                            </div>
                        </div>
                    </a>
                    <a href="Profile.php">
                        <div class="menubar-opt">
                            <div class="op6">
                                <i class="las la-user-circle"></i>
                                <span>Profile</span>
                            </div>
                        </div>
                    </a>
                    <a href="Register.php">
                        <div class="menubar-opt">

                            <div class="op7">
                                <i class="las la-sign-in-alt"></i>
                                <span>Register</span>
                            </div>

                        </div>
                    </a>
                    <a href="Logout.php">
                        <div class="menubar-opt">

                            <div class="op8">
                                <i class="las la-sign-out-alt"></i>
                                <span>Logout</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--End right-menu-->

        <!--Start Nav-menu-->
        <div class="navbar">
            <div class="navbar-items">
                <img src="../image/proimg.jpeg" alt="profileimage">
            </div>
            <div class="navbar-items">
                <h5>Register</h5>
            </div>
            <div class="navbar-items">
                <div class="nav-user-icon online" onclick="SettingMenuToggle()">
                    <i class="las la-users-cog"></i>
                </div>
            </div>
        </div>

        <div class="setting-menu">

            <div class="setting-menu-inner">

                <div class="dropdownlist">
                    <div>
                        <div>
                            <img src="../image/proimg.jpeg" alt="profileimage">
                        </div>
                        <span>Thanusiyan</span><br>
                        <div class="profile-small">
                            <a href=""><span>Your Profile</span></a>
                        </div>
                        <hr>
                        <div class="walut">
                            <i class="las la-wallet"></i>
                            <a href=""><span>My Wallet</span></a>
                        </div>
                        <div class="setting">
                            <i class="las la-cog"></i>
                            <a href=""><span>Setting</span></a>
                        </div>
                        <div class="signuot">
                            <i class="las la-sign-out-alt"></i>
                            <a href=""><span>SignOut</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--End Nav-menu-->

        <!--Start register-contant-->
        <div class="profileadmin">
            <div class="usertable">
                <form action="../admin_class/Adminregisterback.php" method="POST">
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
                        <input type="number" name="Phone" value="" placeholder="Phone Number" required>
                        <i class="las la-phone"></i>
                    </div>
                    <input type="submit" name="Register" value="Registrater" class="btn">
                </form>
            </div>
        </div>


        <!--end register-contant-->
    </body>
    <script src="../style.js"></script>
</html>
