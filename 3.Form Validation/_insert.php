<?php 

    require_once '_conectivity.php';
    require_once '_function.php';
    require_once 'index.php';

    
    $full_name = $_POST['name'];
    $email_address = $_POST['email'];
    $password = $_POST['password'];
    $country_name = $_POST['country'];
    $state_name = $_POST['state'];
    $city_name = $_POST['city'];

    $query = "INSERT INTO area1 (Fullname,Email,Email_Password,Country,C_State,S_city) VALUES ('$full_name','$email_address','$password',$country_name', '$state_name', '$city_name');";

    try{
        mysqli_query($con,$query);
    }
    catch(Exception $e){
        my_log_error('area table insert error', $e->getMessage());
    }
?>