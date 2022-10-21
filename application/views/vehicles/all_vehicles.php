


<?php

$add_vehicle_url = base_url('index.php/vehicles/add_vehicle');

echo "<a class='btn btn-primary btn-block' href='$add_vehicle_url'>(+) new vehicle</a>";
echo"<br>";

echo "  <div class='panel-group'>";

    foreach ($cars as $car){
        $url=base_url('/index.php/vehicles/car_details/'.$car->id);
        echo "<a class='btn btn-outline-primary' href='$url'>";
            echo "<li class='list-group-item'>";


            echo $car->license_plate ."<br>" ;


            echo $car->manufacturer."<br>" ;
            echo $car->model ."<br>";
            echo $car->color ."<br>";




            echo"</li>";

        echo"</a>";
    }
echo "</div>";




?>
