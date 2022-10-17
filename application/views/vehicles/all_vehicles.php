<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<?php
$this->load->view("navbar") ;

echo "  <div class='panel-group'>";
foreach ($cars as $car){
    echo "<li class='list-group-item'>";


        echo $car->license_plate ."<br>" ;


        echo $car->manufacturer ;
        echo $car->model ."<br>";
        echo $car->color ."<br>";
        $url="http://127.0.0.1:80/index.php/vehicles/car_details/".$car->id;


        echo "<a class='btn btn-primary btn-sm' href='$url'>details</a>";
        echo "<br><br><br>";
    echo"</li>";
}
echo "</div>";


?>
