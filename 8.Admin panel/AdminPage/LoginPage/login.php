<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login-style.css">
</head>

<body>
    <div class="login-container" style="background-color: #6fafff;">
        <img src="images/login-sideimage.jpg" alt="">
        <div class="login-inner" style="background-color: #514cf1;">
            <form action="login-code.php" method="POST">
                <div class="email-container margin">
                    <label style="color: white;">Enter Email</label><br>
                    <input type="email" name="login_email" placeholder="Email" required>
                </div>
                <div class="password-container margin">
                    <label style="color: white;">Enter Password</label><br>
                    <input type="password" name="login_password" placeholder="Password" required>
                </div>
                <div class="submit-btn margin">
                    <button type="submit" name="login_btn">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>