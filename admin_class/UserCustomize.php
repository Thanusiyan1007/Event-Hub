<?php
require '../classes/Dbconnector.php';

use classes\Dbconnector;

$dbcon = new Dbconnector();
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
                <h5>User Customize</h5>
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


        <!--Start user-menu-->

        <div class="user-Customize-Container">
            <h3> Dealer Details</h3>
            <table>
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Username </th>
                        <th>Nic</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    try {
                        $con = $dbcon->getConnection();
                        $query = "SELECT * FROM `user` WHERE `role` = 'customer'";
                        $pstmt = $con->prepare($query);
                        $pstmt->execute();
                        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
                        $i = 1;
                        foreach ($rs as $user) {
                            ?>
                            <tr>
                                <td><?php echo $user->FullName; ?></td>
                                <td><?php echo $user->PhoneNumber; ?></td>
                                <td><?php echo $user->Email; ?></td>
                                <td><?php echo $user->Username; ?></td>
                                <td><?php echo $user->NIC; ?></td>
                                <td><a href="delete_user_customize.php?id=<?php echo $user->Id; ?>"><button>Delete Dealer</button></a></td>
                            </tr>
                            <?php
                            $i++;
                        }
                    } catch (PDOException $exc) {
                        echo $exc->getMessage();
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--End user-menu-->

    </body>
    <script src="../style.js"></script>
</html>