<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload_Image</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- navbar css -->
    <link rel="stylesheet" href="../Component/nav-style.css">
    <style>
    .container {
        margin-top: -80px;
        padding-bottom: 5px;
    }
    </style>
</head>

<body>
    <?php
    include_once("../Component/navbar.php");
    ?>
    <div class="container">
        <h3 style="padding: 70px 0px 30px 140px; margin-bottom:-90px"><u>User List :</u></h3>
        <form action="addToDataBase.php" method="POST" class="p-5"
            style="width: 650px; margin: 140px auto; border: 1px solid black; border-radius: 30px;">
            <div class="form-group">
                <label class="pb-2">Skill Name</label>
                <input type="text" name="skill_name" required class="form-control mb-3" placeholder="Enter Skill Name">
            </div>
            <div class="form-group">
                <label class="pb-2">Skill Color</label>
                <input type="text" name="skill_color" required class="form-control mb-3" placeholder="Enter Color">
            </div>
            <div class="form-group">
                <label class="pb-2">Progress</label>
                <input type="text" name="skill_progress" required class="form-control mb-3"
                    placeholder="Enter Progress Details">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="pb-2">Categories : </label>
                <select name="Role" class="form-control mb-3" required>
                    <option value="0">--- Select Categories ---</option>
                    <option value="0">programmingLanguages</option>
                    <option value="1">database</option>
                    <option value="2">libraries</option>
                </select>
            </div>
            <button type="submit" name="submit_skill" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php
    include_once("../Component/footer.php");
    ?>
</body>

</html>