<?php

    require_once '_function.php';
    require_once '_conectivity.php';

    $country_name = $_POST['country_name'];
    $state_name = $_POST['state_name'];
    $city_name = $_POST['city_name'];

    $query = "INSERT INTO area (Cou,St,Ct) VALUES ('$country_name', '$state_name', '$city_name');";

    try{
        mysqli_query($con,$query);
    }
    catch(Exception $e){
        my_log_error('area table insert error', $e->getMessage());
    }
?>