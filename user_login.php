<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login | Raakdatri Indonesia</title>
    <link rel="stylesheet" href="css/user_login.css">
    <link rel="icon" href="img/logo.svg" type="image/svg">
    <!-- Your other external CSS and font imports -->
</head>

<body>
    <div class="login-form">
        <div class="content">
            <h1>Welcome!</h1>
            <h3>Glad to see you👋</h3>
            <h3>Login to your account below</h3>
            <form action="components/login_process.php" method="POST">
                <input type="email" name="email" placeholder="Enter your email" required autofocus>
                <div class="password-container">
                    <input type="password" name="password" id="passwordInput" placeholder="Enter your password" required>
                    <i class='bx bx-show-alt toggle-password' id="togglePassword"></i>
                </div>
                <p class="forgot"><a href="#">Forgot Password?</a></p>
                <button class="btn" type="submit">Login</button>
            </form>
            <p class="other">Or login with</p>
            <div class="gambar">
                <a href="#"><img src="img/icon/google.svg" alt=""></a>
                <a href="#"><img src="img/icon/fb.svg" alt=""></a>
            </div>
            <p class="account">Not a member? <a href="user_regist.php">Register Now</a></p>
        </div>
        <div class="form-img">
            <img src="img/login.png" alt="Login Image">
        </div>
    </div>

    <script src="js/login.js"></script>
</body>

</html>