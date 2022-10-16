<?php

foreach ($cars as $car){
    echo $car->license_plate ."<br>";
    echo $car->manufacturer ."<br>";
    echo $car->model ."<br>";
    echo $car->color ."<br>";
    $url="http://127.0.0.1:80/index.php/vehicles/car_details/".$car->id;

    echo "<a href='$url'>details</a>";
    echo "<br><br><br>";
}

?>
