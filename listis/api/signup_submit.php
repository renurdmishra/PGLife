<?php
require("../includes/database_connect.php");


    // Check if the required fields are set in $_POST array
    if (isset($_POST['full_name'], $_POST['phone'], $_POST['email'], $_POST['passwors'], $_POST['college_name'], $_POST['gender'])) 
        // Retrieve form data
        $full_name = $_POST['full_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = sha1($password); // Using SHA1 for hashing (deprecated, consider stronger hashing algorithms like bcrypt or Argon2)
        $college_name = $_POST['college_name'];
        $gender = $_POST['gender'];

        // Check if the email already exists in the database
        $sql = "SELECT * FROM pglife.users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            $response = array ("success" => false,"message" => "Something went wrong!");
            echo json_encode($response);
            return;
        }

        $row_count = mysqli_num_rows($result);
        if ($row_count != 0) {
            $response = array ("success" => false,"message" => "This email id is already registered with us");
            echo json_encode($response);
            return;
             
        }

        // Insert new user into the database
        $sql = "INSERT INTO users (email, passwors, full_name, phone, gender, college_name) 
                VALUES ('$email', '$password', '$full_name', '$phone', '$gender', '$college_name')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            $response = array ("success" => false,"message" => "Something went wrong!");
            echo json_encode($response);
            return;
            
        }
        $response = array ("success" => true,"message" => "Your account has been created successfully!");
        echo json_encode($response);
         mysqli_close($conn);
     
?>