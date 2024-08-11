<?php 
    require_once '_conectivity.php';
    $country_query = "select id,name from countries";
    $result = mysqli_query($con, $country_query);
?>

<html>
    <head>
        <title>Form_Select Connectivity</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <div id="website_preloader"></div>

        <div class="form_container">
            <form action="_insert.php" method="POST">

                <u><h3 id="hedding">Enter Your Area Details</h3></u>

                <label>Enter Your Country : </label><br><br>
                <select name="country_name" id="Country">
                    <option value="">--- Select Country ---</option>
                    <?php 
                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option><?php } ?>
                </select><br><br>

                <label>Enter Your State : </label><br><br>
                <div id="selectBox1_loader" style="display:none"><span class="spinner-border"></span></div>
                <select name="state_name" id="State">
                    <option value="">--- Select State ---</option>
                </select><br><br>

                <label>Enter Your City : </label><br><br>
                <div id="selectBox2_loader" style="display:none"><span class="spinner-border"></div>
                <select name="city_name" id="City">
                    <option value="">--- Select City ---</option>
                </select><br><br><br><br><br>

                <input type="submit" name="submit" id="btn" />
            </form>
        </div>

        <script>
            $(document).ready(function(){
                $('#Country').change(function() {
                    $("#selectBox1_loader").show();
                    var id = $(this).val();
                    $.ajax({
                        url: "_fetch.php",
                        type: "POST",
                        data: {
                            id: id,
                            type: "State"
                        },
                        success: function(response) {
                            $("#selectBox1_loader").hide();
                            $('#State').html(response);
                        }
                    });
                });

                $('#State').change(function() {
                    $("#selectBox2_loader").show();
                    var id = $(this).val();
                    $.ajax({
                        url: "_fetch.php",
                        type: "POST",
                        data: {
                            id: id,
                            type: "City"
                        },
                        success: function(response) {
                            $("#selectBox2_loader").hide();
                            $('#City').html(response);
                        }
                    });
                });
            });

            var websiteLoader = document.getElementById("website_preloader");
            window.addEventListener("load", function(){
                websiteLoader.style.display = "none";
            });
        </script>

    </body>
</html>