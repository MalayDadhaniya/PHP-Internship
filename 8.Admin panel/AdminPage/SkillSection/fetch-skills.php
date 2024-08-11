<?php
include_once("C:/xampp/htdocs/INTERNSHIP/8.Admin panel/AdminPage/Component/config.php");

// Initialize the $skills variable as an empty array
$skills = [];

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Fetch skills from the database
$skills_query = "SELECT * FROM skills";
$result = mysqli_query($con, $skills_query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $skills[] = $row;
    }
} else {
    echo "ERROR: Could not execute $skills_query. " . mysqli_error($con);
}

// Close connection
mysqli_close($con);