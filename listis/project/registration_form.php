<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/common.css"/>
</head>
<body>

<h2>Registration Form</h2>

<form method="post" action="register_submit.php">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <label for="confirm_password">Confirm Password:</label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>
    
    <input type="submit" value="Register">
</form>

</body>
</html>
