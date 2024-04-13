<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="post" action="signup_submit.php" id="registrationForm">
    <label for="full_name">Full Name:</label><br>
    <input type="text" id="full_name" name="full_name" required><br><br>
    
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" minlength="6" required><br><br>
    
    <label for="college_name">College Name:</label><br>
    <input type="text" id="college_name" name="college_name" required><br><br>
    
    <label for="gender">Gender:</label><br>
    <select id="gender" name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br><br>
    
    <input type="submit" value="Register">
</form>

//<script>
// JavaScript to disable form submission if there are invalid fields
//document.getElementById("registrationForm").addEventListener("submit", function(event) {
    //var form = event.target;
    //if (!form.checkValidity()) {
       // event.preventDefault(); // Prevent form submission if validation fails
//alert("Please fill out all required fields.");
   // }
//});
</script>

</body>
</html>
