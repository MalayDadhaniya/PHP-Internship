<?php
$con = mysqli_connect("localhost", "root", "", "_pagination_in_php") or die("Connection Error !!");
$query = "SELECT * FROM pagination";
$result = mysqli_query($con, $query) or die("Query Error !!");

function getId($q)
{
    global $con;
    if ($row = mysqli_fetch_row(mysqli_query($con, $q))) {
        return $row[0];
    } else {
        return '';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>

    <!-- DataTable, Jquery, Bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }

        /* Custom styles for the DataTable search input */
        .dataTables_filter input {
            margin: 25px 20px 0px 0px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Custom styles for the DataTable length menu select box */
        .dataTables_length {
            margin: 25px 0px 0px 0px;
        }

        table {
            font-size: 13px;
        }

        .page-link {
            color: black;
        }
    </style>

</head>

<body class="container">
    <table id="example" class="table table-striped border-bottom border-dark" style="width:100%">
        <thead id="thead" class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Country_id</th>
                <th>State_id</th>
                <th>City_id</th>
                <th>Address</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_row($result)) { ?>
                <tr>
                    <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>

                    <?php
                    $country = "SELECT name FROM countries WHERE id = " . $row[3];
                    echo "<td>" . getId($country) . "</td>";
                    $state = "SELECT name FROM states WHERE id = " . $row[4];
                    echo "<td>" . getId($state) . "</td>";
                    $city = "SELECT name FROM cities WHERE id = " . $row[5];
                    echo "<td>" . getId($city) . "</td>";
                    ?>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pagingType": "simple_numbers",
                "lengthMenu": [5, 10, 15, 50],
                "order": [
                    [0, 'asc']
                ],
                "columnDefs": [{
                    "searchable": false,
                    "targets": [2]
                }, ]
            });
        });
    </script>
</body>

</html>