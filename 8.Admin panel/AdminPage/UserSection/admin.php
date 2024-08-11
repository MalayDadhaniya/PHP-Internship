<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- navbar css -->
    <link rel="stylesheet" href="./Component/nav-style.css">

    <!-- datatable -->
    <link rel="stylesheet" href="/DataTables/datatables.css" />
    <script src="/DataTables/datatables.js"></script>
</head>

<body>
    <?php
    include_once("./Component/config.php");
    include_once("./Component/navbar.php");
    ?>
    <?php
    include_once("./user-list.php");
    ?>
    <?php
    include_once("./Component/footer.php");
    ?>
</body>

</html>