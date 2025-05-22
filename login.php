<!-- <?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: main.php");
    exit;
}

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.1">
    <title>ITCC 5 Login Form - Demo</title>
</head>
<body>
    <div class="container">
        <img src="images/jimboyz-bg.png" width="620px" height="400px" alt="background">
        <div class="form-container">
            <div class="description">
                <h2>Welcome Back</h2>
                <p>Welcome back! We're thrilled to have you here again. Let's get you login and started on your journey.</p>
            </div>
            <div class="form">
                <h2>Login</h2>
                <form action="login-controller.php" method="POST">
                    <input type="text" id="username" name="username" required placeholder="Username" autocomplete="on">
                    <input type="password" id="password" name="password" required placeholder="Password">
                    <input type="submit" name="login" value="Login">
                </form>
                <h3>Don't have an account? <span id="sign-up"> <a href="sign-up.php">Sign up</a></span></h3>
            </div>
        </div>
    </div>
</body>
</html>