
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign-up.css?<? time()?>">
    <title>ITCC 5 Sign-up</title>
</head>
<body>
    <div class="container">
        <img src="images/jimboyz-bg.png" width="620px" height="400px" alt="background">
        <div class="form-container">
            <div class="description">
                <h2>Welcome</h2>
                <p>Welcome! We are thrilled to have you here. Let's get you sign up and started on your journey with us.</p>
            </div>
            <div class="form">
                <h2>Sign Up</h2>
                <form action="signup-controller.php" method="POST">
                    <input type="text" id="firstname" name="firstname" required placeholder="Firstname" autocomplete="off">
                    <input type="text" id="lastname" name="lastname" required placeholder="Lastname" autocomplete="off">
                    <input type="text" id="username" name="username" required placeholder="Username" autocomplete="off">
                    <input type="password" id="password" name="password" required placeholder="Password">
                    <input type="password" id="confirm" name="confirm" required placeholder="Re-password">
                    <input type="submit" name="create" value="Create">
                </form>
                <h3>Already have an account? <span id="sign-up"> <a href="login.php">Sign in</a></span></h3>
            </div>
        </div>
    </div>
</body>
</html>