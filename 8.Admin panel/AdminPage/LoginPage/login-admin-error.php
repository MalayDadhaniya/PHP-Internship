<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Error</title>
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
    * {
        margin: 0%;
        padding: 0%;
        box-sizing: border-box;
    }

    .container {
        display: flex;
        /* border: 1px solid black; */
        margin: 20vh auto;
    }

    .container .text-part {
        margin: 100px 0px 0px 100px;
    }

    .container .text-part .back {
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="iamge-part">
            <img src="./images/wrong-password.jpeg" height="300vw" alt="wrong-password-img">
        </div>
        <div class="text-part">
            <h2>You are Not Admin !!</h2>
            <a href="./login.php" class="btn btn-danger back">Back</a>
        </div>
    </div>
</body>

</html>