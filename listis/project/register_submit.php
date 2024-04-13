<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Basic validation
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "Please fill all the fields.";
    } elseif ($password != $confirm_password) {
        echo "Password and Confirm Password do not match.";
    } else {
        // If all validation passes, you can proceed with registration
        // Here, you can insert the data into your database, send confirmation email, etc.
        // For demonstration purposes, let's just display the registered user's information
        echo "Registration successful!<br>";
        echo "Username: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        // Remember to hash the password before storing it in the database in a real scenario
    }
} else {
    // If someone tries to access this page directly without submitting the form, redirect them back to the registration form
    header("Location: registration_form.php");
    exit;
}

?>
