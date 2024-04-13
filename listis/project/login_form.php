<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Include necessary CSS files -->
    <link rel="stylesheet" type="text/css" href="../css/common.css">
</head>
<body>

<div class="login-container">
    <h2>Login with PGLife</h2>
    <form id="login-form" class="form" role="form" method="post" action="login_submit.php">
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-user"></i>
                </span>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>

        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-block btn-primary">Login</button>
        </div>
    </form>
    <div class="text-center">
        <span>
            Don't have an account? <a href="registration_form.php">Register here</a>
        </span>
    </div>
</div>

<!-- Include necessary JavaScript files -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
