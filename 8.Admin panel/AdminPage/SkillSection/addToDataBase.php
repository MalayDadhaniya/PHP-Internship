<?php
include_once("../Component/config.php");

if (isset($_POST["submit_skill"])) {
    $skill_name = $_POST["skill_name"];
    $skill_color = $_POST["skill_color"];
    $skill_progress = $_POST["skill_progress"];
    $skill_categories = $_POST["skill_categories"];

    $skill_query = "INSERT INTO skills (Skill_name, Color, Progress) VALUES ('$skill_name', '$skill_color', '$skill_progress','$skill_categories')";
    mysqli_query($con, $skill_query);
}