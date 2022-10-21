
<?php

$add_service_url=base_url('/index.php/services/new_service');


echo "<a class='btn btn-primary btn-block' href='$add_service_url'>new service</a><br>";
echo "  <div class='panel-group'>";
foreach ($services as $service){
    $url=base_url('/index.php/services/service_details/'.$service->id);
    echo "<a class='btn btn-outline-primary' href='$url'>";
        echo "<li class='list-group-item'>";
        echo $service->license_plate ."<br>";
        echo $service->manufacturer ."<br>";
        echo $service->model ."<br>";
        echo $service->color ."<br>";
        echo $service->date ."<br>";
        echo $service->name ."<br>";

        echo "</li>";
    echo" </a>";
}
echo "</div>";

?>
