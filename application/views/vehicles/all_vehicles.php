


<?php

$add_vehicle_url = base_url('index.php/vehicles/add_vehicle');

echo "<a class='btn btn-primary btn-block' href='$add_vehicle_url'>(+) new vehicle</a>";
echo"<br>";
echo "  <div class='panel-group'>";
foreach ($cars as $car){
    echo "<li class='list-group-item'>";


        echo $car->license_plate ."<br>" ;


        echo $car->manufacturer ;
        echo $car->model ."<br>";
        echo $car->color ."<br>";
/*        $url="http://127.0.0.1:80/index.php/vehicles/car_details/".$car->id;*/
          $url=base_url('/index.php/vehicles/car_details/'.$car->id);

        echo "<a class='btn btn-primary btn-sm' href='$url'>details</a>";
        echo "<br><br><br>";
    echo"</li>";
}
echo "</div>";


?>
