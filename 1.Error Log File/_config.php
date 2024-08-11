<?php 
    require_once '_function.php';
    
    error_reporting(2037);

    try{
        $con = mysqli_connect("localhost","root","","internship");
    }
    catch(Exception $e){
        my_log_error('connection Error',$e->getMessage());
    }
?>