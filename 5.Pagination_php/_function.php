<?php

function getId($query)
{
    global $con;
    if ($row = mysqli_fetch_row($con->query($query))) {
        return $row[0];
    } else {
        return "";
    }   
}
?> 