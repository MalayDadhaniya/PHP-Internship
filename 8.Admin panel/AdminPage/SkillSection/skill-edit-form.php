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
        padding: 30px 40px 40px 40px;
        margin: 20vh auto;
        border: 1px solid black;
        border-radius: 30px;
    }

    /* .container .back {
            float: right;
        } */

    .container label {
        padding-bottom: 5px;
        padding-top: 5px;
    }

    .container .buttons {
        margin-top: 10px;
    }

    .container .buttons {
        display: flex;
    }

    .container .buttons a {
        color: #fff;
        text-decoration: none;
    }
    </style>

</head>

<body>
    <div class="container">
        <h3 style="padding: 0px 0px 30px 140px; margin-bottom: -90px"><u>User List :</u></h3>
        <form action="./skill-editPage.php" method="POST" style="width: 650px;">

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $query = "SELECT * FROM skills WHERE Id='$id' LIMIT 1";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    $row = mysqli_fetch_array($query_run);
            ?>
            <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
            <div class="form-group">
                <h3>Edit Skills</h3>
                <label>Skill Name</label>
                <input type="text" name="Skill_name" class="form-control" value="<?php echo $row['Skill_name']; ?>"
                    placeholder="Edit Skill Name">
            </div>
            <div class="form-group">
                <label class="pb-2">Progress Color : </label>
                <input type="text" name="Color" class="form-control mb-3" value="<?php echo $row['Color']; ?>"
                    placeholder="Edit Progress Color">
            </div>
            <div class="form-group">
                <label class="pb-2">Progress(%) : </label>
                <input type="text" name="Progress" class="form-control mb-3" value="<?php echo $row['Progress']; ?>"
                    placeholder="Edit Progress...">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="pb-2">Categories : </label>
                <select name="categories" class="form-control mb-3" required>
                    <option value="">--- Select Categories ---</option>
                    <option value="programmingLanguages">programmingLanguages</option>
                    <option value="database">database</option>
                    <option value="libraries">libraries</option>
                </select>

            </div>
            <?php
                } else {
                    echo "<h4>No Record Found!</h4>";
                }
            }
            ?>

            <div class="buttons">
                <button type="submit" name="skill-edit-submit" class="btn btn-danger">Update</button>
                <a href="./skill-list.php" class="btn btn-primary " style="margin-left: 10px;">Back</a>
            </div>
        </form>
    </div>
</body>
<?php
include_once("../Component/footer.php");
?>

</html>