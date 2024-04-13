<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $interests = isset($_POST['interest']) ? $_POST['interest'] : array();
    $city = $_POST['city'];
    $address = $_POST['address'];

    // Basic validation
    if (empty($email) || empty($password) || empty($gender) || empty($interests) || empty($city) || empty($address)) {
        echo "Please fill all the fields.";
    } else {
        // If all validation passes, you can proceed with processing the form data
        // For demonstration purposes, let's just display the submitted data
        echo "Form submitted successfully!<br>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Interests: " . "", $interests . "<br>";
        echo "City: " . $city . "<br>";
        echo "Address: " . $address . "<br>";
    }
} else {
    // If someone tries to access this page directly without submitting the form, redirect them back to the form page
    header("Location: registration_form.php");
    exit;
}
?>
