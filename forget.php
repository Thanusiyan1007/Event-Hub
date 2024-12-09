<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="form-container">
        <form action="">
            <h1>
                Forget Password
            </h1>
            <div class="input-box">
                <input type="text" name="oldpassword" value="" placeholder="Old Password" required>
                <i class="las la-key"></i>
            </div>
            <div class="input-box">
                <input type="password" name="newpassword" value="" placeholder="New Password" required>
                <i class="las la-key"></i>
            </div>
            <div class="input-box">
                <input type="password" name="re_newpassword" value="" placeholder="Retype New Password" required>
                <i class="las la-key"></i>
            </div>
            <input type="submit" name="Confirm" value="Confirm" class="btn">
            <div class="register">
                <p>Back to Login
                    <a href="login.php">Click here</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>