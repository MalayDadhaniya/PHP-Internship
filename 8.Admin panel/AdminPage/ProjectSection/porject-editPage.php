<?php

include_once("../Component/config.php");

if (isset($_POST['project-img-submit'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $Project_Name = $_POST['Project_Name'];
    $Image = $_POST['Image'];

    if ($id) {
        $query = "UPDATE projectsimages SET Project_Name='$Project_Name', Image='$Image' WHERE Id='$id'";
        mysqli_query($con, $query);
    }
    header("Location: uploadImg-code.php");
    header("Location: project-image-list.php");
    exit();
}

if (isset($_POST['deleteProject'])) {
    // $del_Project = $_POST['deleteProject'];

    // $delete_query = "DELETE FROM projectsimages WHERE Id='$del_Project'";
    // $delete_query_run = mysqli_query($con, $delete_query);

    // header("Location: project-image-list.php");
    // exit();
    $del_Project = $_POST['deleteProject'];

    // Fetch the image path from the database
    $fetch_image_query = "SELECT Image FROM projectsimages WHERE Id='$del_Project'";
    $fetch_image_result = mysqli_query($con, $fetch_image_query);

    if ($fetch_image_result && mysqli_num_rows($fetch_image_result) > 0) {
        $row = mysqli_fetch_assoc($fetch_image_result);
        $imagePath = $row['Image'];

        // Delete the image file from the server
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the record from the database
        $delete_query = "DELETE FROM projectsimages WHERE Id='$del_Project'";
        $delete_query_run = mysqli_query($con, $delete_query);

        if ($delete_query_run) {
            header("Location: project-image-list.php");
            exit();
        } else {
            echo "ERROR: Could not execute $delete_query. " . mysqli_error($con);
        }
    } else {
        echo "ERROR: Could not fetch image path. " . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
} else {
    header("Location: project-image-list.php");
    exit();
}