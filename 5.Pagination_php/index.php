<?php
require_once '_config.php';
require_once '_function.php';
require_once '_pagination.php';
?>

<html>

<head>
    <title>Malay Dadhaniya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- Select2 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- jquery cnd -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>
    <div>
        <div class="filter_main p-4 float-end">
            <form method="get">
                <select name="country" id="country" class="px-4 mx-3 py-1 js-example-basic-single" onchange="this.form.submit()">
                    <option value="">--- Select Country ---</option>
                    <?php
                    $query1 = "SELECT id, name FROM countries";
                    $result1 = mysqli_query($con, $query1);
                    while ($row = mysqli_fetch_assoc($result1)) {
                        $selected = ($selectedCountry == $row['id']) ? 'selected' : '';
                        echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
                    }
                    ?>
                </select>
                <select name="state" id="state" class="px-2 mx-3 py-1 js-example-basic-single" onchange="this.form.submit()">
                    <option value="">--- Select State ---</option>
                    <?php
                    if (!empty($selectedCountry)) {
                        $query2 = "SELECT id, name FROM states WHERE country_id = '$selectedCountry'";
                        $result2 = mysqli_query($con, $query2);
                        while ($row = mysqli_fetch_assoc($result2)) {
                            $selected = ($selectedState == $row['id']) ? 'selected' : '';
                            echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <select name="city" id="city" class="px-2 mx-3 py-1 js-example-basic-single" onchange="this.form.submit()">
                    <option value="">--- Select City ---</option>
                    <?php
                    if (!empty($selectedState)) {
                        $query3 = "SELECT id, name FROM cities WHERE state_id = '$selectedState'";
                        $result3 = mysqli_query($con, $query3);
                        while ($row = mysqli_fetch_assoc($result3)) {
                            $selected = ($selectedCity == $row['id']) ? 'selected' : '';
                            echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <input type="text" name="name" class="px-4 mx-3 py-1" placeholder="Search by name" value="<?php echo htmlspecialchars($searchName); ?>">
            </form>
        </div>
        <table border="1" class="table table-striped">
            <tr class="table-light">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Address</th>
                <th>Date</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <?php
                        $countryQuery = "SELECT name FROM countries WHERE id = " . $row['Country_id'];
                        $countryResult = mysqli_query($con, $countryQuery);
                        $countryRow = mysqli_fetch_assoc($countryResult);
                        $countryName = ($countryRow !== null) ? $countryRow['name'] : '';

                        $stateQuery = "SELECT name FROM states WHERE id = " . $row['State_id'];
                        $stateResult = mysqli_query($con, $stateQuery);
                        $stateRow = mysqli_fetch_assoc($stateResult);
                        $stateName = ($stateRow !== null) ? $stateRow['name'] : '';

                        $cityQuery = "SELECT name FROM cities WHERE id = " . $row['City_id'];
                        $cityResult = mysqli_query($con, $cityQuery);
                        $cityRow = mysqli_fetch_assoc($cityResult);
                        $cityName = ($cityRow !== null) ? $cityRow['name'] : '';

                        echo "<td>" . $countryName . "</td>";
                        echo "<td>" . $stateName . "</td>";
                        echo "<td>" . $cityName . "</td>";

                        ?>
                        <td><?php echo $row['Address']; ?></td>
                        <?php
                        $mytime = gmdate('m-d-Y', $row['Date']);
                        echo "<td>$mytime</td>";
                        ?>
                    </tr>
            <?php }
            } else {
                echo "<tr><td colspan='8'> No record found !! </td></tr>";
            }
            ?>
        </table>
        <div class="Page_btn">
            <?php require_once '_fetch.php'; ?>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
</body>

</html>