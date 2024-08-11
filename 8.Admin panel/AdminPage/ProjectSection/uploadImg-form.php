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
</head>

<body>
    <?php
    include_once("../Component/navbar.php");
    ?>
    <div class="container">
        <h3 style="padding: 0px 0px 30px 140px; margin-bottom:-90px"><u>User List :</u></h3>
        <form action="uploadImg-code.php" method="POST" enctype="multipart/form-data" class="p-5" style="width: 650px; margin: 140px auto; border: 1px solid black; border-radius: 30px;">
            <div class="form-group">
                <label class="pb-2">Image Name</label>
                <input type="text" name="img_name" required class="form-control mb-3" placeholder="Enter Image Name">
            </div>
            <div class="form-group">
                <label class="pb-2">Upload Image : </label>
                <input type="file" name="img" required class="form-control mb-3">
            </div>
            <button type="submit" name="submit_image" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php
    include_once("../Component/footer.php");
    ?>
</body>

</html>