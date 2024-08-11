<?php 
    require_once '_conectivity.php';
    $country_query = "select id,name from countries";
    $result = mysqli_query($con, $country_query);
?>

<html>
    <head>
        <title>Form Validation</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>

        <?php include_once '_validation.php'; ?>

        <div class="form_all">
            <form name="Form" id="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">  
                 <!-- onsubmit="return validateForm()" -->
                <h2>Registration Form</h2><br>
    
                <div class="box">
                    <label>Full Name : </label>
                    <input type="text" name="name" id="name" />
                    <span class="error" id="nameErr"><?php echo $error_name ?></span>
                </div><br>
    
                <div class="box">
                    <label>Email Address : </label>
                    <input type="text" name="email" id="email" />
                    <span class="error" id="emailErr"><?php echo $error_email ?></span>
                </div><br>
    
                <div class="box">
                    <label>Password : </label>
                    <input type="password" name="password" id="password" />
                    <span class="error" id="passwordErr"><?php echo $error_password ?></span>
                </div><br>

                <div class="box">
                    <label>Confirm Password : </label>
                    <input type="password" name="Cpassword" id="Cpassword" />
                    <span class="error" id="CpasswordErr"><?php echo $error_Cpassword ?></span>
                </div><br>
    
                <div class="box">
                    <label>Country</label>
                    <select name="country" id="country">
                        <option>--- Select Country ---</option>
                        <?php 
                            while($row = mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option><?php } ?>
                    </select>
                </div><br>
                
                <div class="box">
                    <label>State</label>
                    <select name="state" id="state">
                        <option>--- Select Country ---</option>
                    </select>
                    <!-- <span class="error" id="stateErr"></span> -->
                </div><br>

                <div class="box">
                    <label>City</label>
                    <select name="city" id="city">
                        <option>--- Select Country ---</option>
                    </select>
                </div><br>

                <div class="box">
                    <input type="submit" value="Submit" name="s" />
                </div>
            </form>
        </div>
        <!-- <script src="script.js"></script> -->
        <script>
            $(document).ready(function(){
                $('#country').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "_fetch.php",
                        type: "POST",
                        data: {
                            id: id,
                            type: "state"
                        },
                        success: function(response) {
                            $('#state').html(response);
                        }
                    });
                });

                $('#state').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "_fetch.php",
                        type: "POST",
                        data: {
                            id: id,
                            type: "city"
                        },
                        success: function(response) {
                            $('#city').html(response);
                        }
                    });
                });
            });
        </script>
    </body>
</html>