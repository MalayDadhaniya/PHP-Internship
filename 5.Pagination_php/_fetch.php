<?php
$query_btn = "SELECT * FROM pagination";
$result1 = mysqli_query($con, $query_btn) or die("Query Faild !");

if (mysqli_num_rows($result1) > 0) {
    $totalRecords = mysqli_num_rows($result1);
    $totalPage = ceil($totalRecords / $limit);

    echo '<ul>';
    if ($page > 1) {
        echo '<li class="btn btn-secondary"><a href="index.php?page=' . ($page - 1) . '">Prev</a></li>';
    }

    for ($i = 1; $i <= $totalPage; $i++) {
        echo '<li type="button" class="btn btn-secondary"><a href="index.php?page=' . $i . '">' . $i . '</a></li>';
    }

    if ($totalPage > $page) {
        echo '<li class="btn btn-secondary"><a href="index.php?page=' . ($page + 1) . '">Next</a></li>';
    }
    echo '</ul>';
}
