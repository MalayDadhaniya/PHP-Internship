<?php

include_once("../Component/config.php");

if (isset($_POST['login_btn'])) {

    $log_email = $_POST['login_email'];
    $log_password = $_POST['login_password'];

    // Prevent SQL Injection
    $log_email = mysqli_real_escape_string($con, $log_email);
    $log_password = mysqli_real_escape_string($con, $log_password);

    $log_query = "SELECT * FROM users WHERE Email='$log_email' AND Password='$log_password'";
    $log_query_run = mysqli_query($con, $log_query);

    if (mysqli_num_rows($log_query_run) > 0) {
        $row = mysqli_fetch_assoc($log_query_run);
        $id = $row['Id'];
        $name = $row['Name'];
        $email = $row['Email'];
        $phone = $row['Phone'];
        $role = $row['Role'];

        if (!$role == "1") {
            header("Location: ./login-admin-error.php");
            exit(0);
        }

        // Redirect with user information in query parameters
        $redirect_url = "http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/DeshbordSection/dashboard.php?id=$id&name=" . urlencode($name) . "&email=" . urlencode($email) . "&phone=" . urlencode($phone);
        echo "Login Successfully";
        header("Location: $redirect_url");
        exit();
    } else {
        header("Location: ./login-error-msg.php");
    }
} else {
    header("Location: login.php");
    exit();
}