<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- navbar css -->
    <link rel="stylesheet" href="../Component/nav-style.css">

    <!-- datatable -->
    <link rel="stylesheet" href="/DataTables/datatables.css" />
    <script src="/DataTables/datatables.js"></script>

    <style>
    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }

    .container form {
        padding: 20px;
        margin: 5% 30%;
        border: 1px solid black;
        border-radius: 20px;
    }

    .container form label {
        margin-top: 20px;
    }

    .container form button {
        margin: 20px 0px;
    }
    </style>
</head>

<?php
include_once("../Component/navbar.php");
?>

<body>
    <div class="container">
        <h3 style="padding: 0px 0px 30px 130px; margin-bottom:-60px"><u>User List :</u></h3>
        <form action="insert-user.php" method="POST" style="width: 650px;">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter User Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone Number</label>
                <input type="text" name="phone" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email Address</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                    placeholder="Enter Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<?php
include_once("../Component/footer.php");
?>

</html>