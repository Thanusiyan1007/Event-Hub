<?php
$message = null;
if (isset($_GET["status"])) {
    $status = $_GET["status"];
    if ($status == 0) {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>Required values were not submitted</h5>";
    } elseif ($status == 1) {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>username and Password to enter</h5>";
    } else {
        $message = "<h5 style='width: 100%;height: 100%;background: #aa0000;border: none;outline: none;border: 2px solid rgba(255, 255, 255, .2);border-radius: 40px;color: #ffff;padding: 20px 45px 20px 20px;font-size: 20px;'>User Name and Password are incorrect</h5>";
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
        <title>Login</title>
    </head>

    <body>
        <div class="form-container">
            <form action="loginback.php" method="POST">
                <h1>
                    Login
                </h1>
                <?= $message ?>
                <div class="input-box">
                    <input type="text" name="username" value="" placeholder="username" required>
                    <i class="lar la-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" value="" placeholder="Password" required>
                    <i class="las la-key"></i>
                </div>
                <div class="pass-forget">
                    <label for="">Forget your password</label>
                    <a href="forget.php">Forget Password</a>
                </div>
                <input type="submit" name="Login" value="Login" class="btn">
                <div class="register">
                    <p>Don't have an account?
                        <a href="registation.php">Click here</a>
                    </p>
                </div>
            </form>
        </div>
    </body>

</html>