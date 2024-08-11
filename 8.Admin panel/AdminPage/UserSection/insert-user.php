<?php
include("../Component/config.php");
session_start(); // Ensure session is started

if (isset($_POST['submit'])) {
    // Fetch form data
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $user = $_POST['username'];
    $number = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $Role = $_POST['Role'];

    if ($id) {
        // Update existing user
        $query = "UPDATE users SET Name='$user', Phone='$number', Email='$email', Password='$pwd', Role='$Role' WHERE Id='$id'";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['status'] = "User Updated Successfully";
        } else {
            $_SESSION['status'] = "User Updating Failed";
        }
    } else {
        // Check if email already exists
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if (mysqli_num_rows($checkemail_run) > 0) {
            $_SESSION['status'] = "Email_id is Already Exist";
        } else {
            // Insert new user
            $user_query = "INSERT INTO users (Name, Phone, Email, Password) VALUES ('$user', '$number', '$email', '$pwd')";
            $user_query_run = mysqli_query($con, $user_query);

            if ($user_query_run) {
                $_SESSION['status'] = "User Added Successfully";
            } else {
                $_SESSION['status'] = "User Registration Failed";
            }
        }
    }

    header("Location: user-list.php");
    exit();
}

// Handle delete request
if (isset($_POST['deleteUser'])) {
    $userid = $_POST['deleteUser'];

    $delete_query = "DELETE FROM users WHERE Id='$userid'";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {
        $_SESSION['status'] = "User Deleted Successfully";
    } else {
        $_SESSION['status'] = "User Deletion Failed";
    }

    header("Location: user-list.php");
    exit();
}