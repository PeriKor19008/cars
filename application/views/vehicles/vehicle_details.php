
<?php

foreach ($dets as $det){
    echo $det->license_plate . "<br>";
    echo $det->vehicle_type . "<br>";
    echo $det->ownership_type . "<br>";
    echo $det->owner . "<br>";
    echo $det->fuel . "<br>";
    echo $det->manufacturer . "<br>";
    echo $det->model . "<br>";
    echo $det->color . "<br>";
    echo $det->year_man . "<br>";
    echo $det->year_license . "<br>";
    echo $det->year_purch . "<br>";
    echo $det->service_reg_km . "<br>";
    echo $det->service_reg_months . "<br>";
    echo $det->service_oil_km . "<br>";
    echo $det->service_oil_months . "<br>";
    echo $det->service_tyre_km . "<br>";
    echo $det->KTEO_years . "<br>";
    echo $det->emission_years . "<br>";
    echo $det->comments . "<br>";
    echo $det->active . "<br>";

}