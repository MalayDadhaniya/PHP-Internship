<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <!-- navbar css  -->
    <link rel="stylesheet" href="../Component/nav-style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

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
    <style>
    .container {
        float: right;
    }
    </style>
</head>

<?php
include_once("../Component/navbar.php");
?>

<body>
    <div class="container" style="width:1300px">
        <h3 style="padding: 5px 0px 30px 0px;"><u>Skill List :</u></h3>
        <?php
        include_once("../Component/config.php");

        // Check connection
        if ($con === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $userList_query = "SELECT * FROM skills";
        $result = mysqli_query($con, $userList_query);

        if ($result) {
        ?>
        <table id="example" class="display table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Skill_name</th>
                    <th>Color</th>
                    <th>Progress</th>
                    <th>Categories</th>
                    <th>Edit & Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Skill_name']; ?></td>
                    <td><?php echo $row['Color']; ?></td>
                    <td><?php echo $row['Progress']; ?></td>
                    <td><?php echo $row['categories']; ?></td>
                    <td>
                        <a href="skill-edit-form.php?id=<?php echo $row['Id']; ?>" class="btn btn-info">Edit</a>
                        <form action="./skill-editPage.php" method="POST" style="display:inline-block;">
                            <input type="hidden" name="delete_id" value="<?php echo $row['Id']; ?>">
                            <button type="submit" name="deleteSkill" value="<?php echo $row['Id']; ?>"
                                class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
                <?php
                    }
                    ?>
            </tbody>
        </table>
        <?php
        } else {
            echo "ERROR: Could not execute $userList_query. " . mysqli_error($con);
        }

        // Close connection
        mysqli_close($con);
        ?>
    </div>
</body>
<?php
include_once("../Component/footer.php");
?>

</html>