<?php 
    require_once '_conectivity.php';

    $id = $_POST['id'];
    $type = $_POST['type'];

    if($type == 'city') {
        $query = "SELECT id,name FROM cities WHERE state_id = '$id'";
    }else {
        $query = "SELECT id,name FROM states WHERE country_id = '$id'";
    }

    $result = mysqli_query($con,$query);

    $options = '';

    while ($row = mysqli_fetch_assoc($result)){
        $options .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    }

    echo $options;
?>