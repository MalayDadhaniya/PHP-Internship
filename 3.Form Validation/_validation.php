<?php
    $error_name = $error_email = $error_password = $error_Cpassword = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname      = $_POST['name'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $Cpassword  = $_POST['Cpassword'];
        $country    = $_POST['country'];
        $state      = $_POST['state'];
        $city       = $_POST['city'];

        if (empty($fname) || !preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $error_name = "<p>Please enter a valid name.</p>";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = "<p>Please enter a valid email address.</p>";
        }

        if (strlen($password) < 8) {
            $error_password = "<p>Please enter a valid password (at least 8 characters long).</p>";
        }

        if ($password !== $Cpassword) {
            $error_Cpassword = "<p>Please make sure the passwords match.</p>";
        }

    }
?>