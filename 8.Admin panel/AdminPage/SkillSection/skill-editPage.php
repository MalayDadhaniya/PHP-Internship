<?php

include_once("../Component/config.php");

if (isset($_POST['skill-edit-submit'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $Skill_name = $_POST['Skill_name'];
    $Color = $_POST['Color'];
    $Progress = $_POST['Progress'];
    $categories = $_POST['categories'];

    if ($id) {
        $stmt = $con->prepare("UPDATE skills SET Skill_name=?, Color=?, Progress=?, categories=? WHERE Id=?");
        $stmt->bind_param("ssisi", $Skill_name, $Color, $Progress, $categories, $id);

        if (!$stmt->execute()) {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    }
    $con->close();

    header("Location: http://localhost/INTERNSHIP/8.Admin%20panel/AdminPage/SkillSection/skill-list.php");
    exit();
}

include_once("../Component/config.php");

if (isset($_POST['deleteSkill'])) {
    $del_Project = $_POST['deleteSkill'];

    $fetch_Skill_query = "SELECT * FROM Skills WHERE Id=?";
    $stmt = $con->prepare($fetch_Skill_query);
    $stmt->bind_param("i", $del_Project);
    $stmt->execute();
    $fetch_Skill_result = $stmt->get_result();

    if ($fetch_Skill_result && $fetch_Skill_result->num_rows > 0) {
        $row = $fetch_Skill_result->fetch_assoc();

        $delete_query = "DELETE FROM Skills WHERE Id=?";
        $stmt = $con->prepare($delete_query);
        $stmt->bind_param("i", $del_Project);
        if ($stmt->execute()) {
            header("Location: skill-list.php");
            exit();
        } else {
            echo "ERROR: Could not execute $delete_query. " . $stmt->error;
        }
    } else {
        echo "ERROR: Could not fetch image path. " . $stmt->error;
    }

    $stmt->close();
    $con->close();
} else {
    header("Location: project-image-list.php");
    exit();
}
