<?php
include_once("../Component/config.php");

if (isset($_POST['submit_image'])) {
    $name = $_POST['img_name'];
    $image = $_FILES['img']['name'];

    $image_query = "INSERT INTO projectsimages (Project_Name, Image) VALUES ('$name', '$image')";
    $image_query_run = mysqli_query($con, $image_query);

    if ($image_query_run) {
        $upload_directory = "../ProjectSection/Project-image/";

        $upload_file = $upload_directory . basename($_FILES["img"]["name"]);

        move_uploaded_file($_FILES["img"]["tmp_name"], $upload_file);
        header("Location: project-image-list.php");
    } else {
        echo "Error inserting data into the database.";
    }
}