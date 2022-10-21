<?php


echo "  <div class='panel-group'>";


    echo "<li class='list-group-item'>";
        echo $results[0]->license_plate."<br>";
        echo $results[0]->manufacturer."<br>";
        echo $results[0]->model;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Date : ".$results[0]->date;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Km : ".$results[0]->km;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Price : ".$results[0]->price;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Shops name : ".$results[0]->shop;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Comments : ".$results[0]->comments;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Type : ".$results[0]->name;
    echo "</li>";



    echo "<li class='list-group-item'>";
        echo "Next regular service (km) : ".$results[0]->service_reg_km;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Next regular service (date) : ".$results[0]->service_reg_date;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Next oil service (km) : ".$results[0]->service_oil_km;
    echo "</li>";

    echo "<li class='list-group-item'>";
        echo "Next oil service (km) : ".$results[0]->service_oil_date;
    echo "</li>";




echo "</div>";


$delete_url=base_url('/index.php/services/are_u_sure_delete/'.$results[0]->id);

echo "<a class='btn btn-primary btn-xs' href='$delete_url'>delete</a>";


?>
