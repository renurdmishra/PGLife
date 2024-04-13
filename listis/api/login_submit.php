<?php

session_start();
require("../includes/database_connect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($email) || empty($password)) {
        echo "Please fill all the fields.";
    } else {
        // Here you can add your authentication logic to check the user credentials
        // For demonstration purposes, let's just display the submitted email and password
        echo "Login submitted successfully!<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
} else {
    // If someone tries to access this page directly without submitting the form, redirect them back to the login page
    header("Location: ../registration_form.php");
    exit;
}
?>
