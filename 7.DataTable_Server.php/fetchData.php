<?php
// Database connection info 
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db'   => '_pagination_in_php'
);

// DB table to use 
$table = 'pagination';

// Table's primary key 
$primaryKey = 'Id';

// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array(
    array('db' => 'Id', 'dt' => 0),
    array('db' => 'Name',  'dt' => 1),
    array('db' => 'Email',      'dt' => 2),
    array('db' => 'Country_id',     'dt' => 3),
    array('db' => 'State_id',    'dt' => 4),
    array('db' => 'City_id',    'dt' => 5),
    array('db' => 'Address',    'dt' => 6),
    array(
        'db'        => 'Date',
        'dt'        => 7,
        'formatter' => function ($d) {
            return date('d-m-Y', strtotime($d));
        }
    )
);

// Include SQL query processing class 
require 'ssp.class.php';

$joinQuery = "FROM `faker` 
              JOIN `countries` ON `faker`.`country_id` = `countries`.`id`
              JOIN `states` ON `faker`.`state_id` = `states`.`id`
              JOIN `cities` ON `faker`.`city_id` = `cities`.`id`";

// Output data as json format 
echo json_encode(
    'SSP'::simple($_GET, $dbDetails, $table, $primaryKey, $columns, $joinQuery)
);
