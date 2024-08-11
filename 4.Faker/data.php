<?php 

    include_once 'config.php';

    require_once './vendor/autoload.php';

    $faker = Faker\Factory::create();   

    $name = $faker->name();

    $email = $faker->email();

    // $password = $faker->password();
    
    function getAreaQuerys($con, $query_state) {
        $result = mysqli_query($con, $query_state);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['id'];
        } else {
            die("Query Error: " . mysqli_error($con));
        }
    }
        
    
    $country = "SELECT id FROM countries ORDER BY RAND() LIMIT 1";
    $country_result = getAreaQuerys($con,$country);

    $state = "SELECT id FROM states WHERE country_id = $country_result ORDER BY RAND() LIMIT 1";
    $state_result = getAreaQuerys($con,$state);

    $city = "SELECT id FROM cities WHERE state_id = $state_result ORDER BY RAND() LIMIT 1";
    $city_result = getAreaQuerys($con,$city);

    $address = $faker->address();

    $date = $faker->unixTime($max = 'now');

    $query = "INSERT INTO Pagination(Name,Email,Country_id,State_id,City_id,Address,Date) VALUES('$name','$email','$country_result','$state_result','$city_result','$address','$date')";

    mysqli_query($con,$query) or die("Query Error !");
?>