
<?php

foreach ($dets as $det){
    echo "license plate : ".$det->license_plate . "<br>";
    echo "vehicle type : ".$det->vehicle_type . "<br>";
    echo "ownership type : ".$det->ownership_type . "<br>";
    echo "owner : ".$det->owner . "<br>";
    echo "fuel : ".$det->fuel . "<br>";
    echo "manufacturer : ".$det->manufacturer . "<br>";
    echo "model : ".$det->model . "<br>";
    echo "color : ".$det->color . "<br>";
    echo "year of manufacture : ".$det->year_man . "<br>";
    echo "year licenced : ".$det->year_license . "<br>";
    echo "year perched : ".$det->year_purch . "<br>";
    echo "km before service : ".$det->service_reg_km . "<br>";
    echo "months before service : ".$det->service_reg_months . "<br>";
    echo "km before oil change : ".$det->service_oil_km . "<br>";
    echo "months before oil change : ".$det->service_oil_months . "<br>";
    echo "km before tyre change : ".$det->service_tyre_km . "<br>";
    echo "years before KTEO check : ".$det->KTEO_years . "<br>";
    echo "years before emissions check : ".$det->emission_years . "<br>";
    echo "kms driven : ".$det->odometer . "<br>";
    echo "comments : ".$det->comments . "<br>";
    echo "active : ".$det->active . "<br>";

    $update_odometer_url="http://127.0.0.1:8000/index.php/vehicles/update_odometer/".$det->id;
    echo "<a href='$update_odometer_url'>update kms driven</a>";
}