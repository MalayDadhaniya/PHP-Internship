<?php 

    require_once '_function.php';
    require_once '_config.php';

    $add       = $_POST['Address'];
    $eml       = $_POST['Email'];
    $dt        = $_POST['DOB'];
    $country   = $_POST['country'];
    $state     = $_POST['state'];
    $city      = $_POST['city'];

    $save_query = "INSERT INTO `user`(`address`, `email`, `date_of_birth`, `country`, `state`, `city`) VALUES ('$add','$eml','$dt','$country','$state','$city')";

    try{
        mysqli_query($con, $save_query);
    }
    catch(Exception $e){
        my_log_error('`user` table insert error', $e->getMessage());
    }
    header("Location:index.php");
?>