<?php
require_once '_config.php';
require_once '_function.php';

$limit = 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$selectedCountry = isset($_GET['country']) ? $_GET['country'] : '';
$selectedState = isset($_GET['state']) ? $_GET['state'] : '';
$selectedCity = isset($_GET['city']) ? $_GET['city'] : '';

$searchName = isset($_GET['name']) ? $_GET['name'] : '';

$query = "SELECT * FROM pagination";
$and_where = [];

if (!empty($selectedCountry)) {
    $and_where[] = "pagination.Country_id = '$selectedCountry'";
}

if (!empty($selectedState)) {
    $and_where[] = "pagination.State_id = '$selectedState'";
}

if (!empty($selectedCity)) {
    $and_where[] = "pagination.City_id = '$selectedCity'";
}

if (!empty($searchName)) {
    $and_where[] = "pagination.Name LIKE '%$searchName%'";
}

if (count($and_where) > 0) {
    $query .= " WHERE " . implode(' AND ', $and_where);
}

$query .= " LIMIT {$offset},{$limit}";

$result = mysqli_query($con, $query);
?>
