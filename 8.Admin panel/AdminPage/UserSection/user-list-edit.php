<?php
include_once("../Component/config.php");
include_once("../Component/navbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- navbar css  -->
    <link rel="stylesheet" href="../Component/nav-style.css">

    <style>
    .container form {
        margin: 20vh auto;
    }

    .container .back {
        float: right;
    }
    </style>

</head>

<body>
    <div class="container">
        <h3 style="padding: 5px 0px 0px 130px; margin-bottom:-60px"><u>User List :</u></h3>
        <a href="./user-list.php" class="btn btn-primary back">Back</a>
        <form action="insert-user.php" method="POST" style="width: 650px;">

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM users WHERE Id='$id' LIMIT 1";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    $row = mysqli_fetch_array($query_run);
            ?>
            <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $row['Name']; ?>"
                    placeholder="Enter User Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone Number</label>
                <input type="text" name="phone" class="form-control" value="<?php echo $row['Phone']; ?>"
                    placeholder="Enter Phone Number">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email Address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $row['Email']; ?>"
                    placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $row['Password']; ?>"
                    placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Role : </label>
                <select name="Role" class="form-control" required>
                    <option value="0">--- Select Role ---</option>
                    <option value="0">User</option>
                    <option value="1">Admin</option>
                </select>
            </div>
            <?php
                } else {
                    echo "<h4>No Record Found!</h4>";
                }
            }
            ?>

            <button type="submit" name="submit" class="btn btn-danger">Update</button>
        </form>
    </div>
</body>
<?php
include_once("../Component/footer.php");
?>

</html>