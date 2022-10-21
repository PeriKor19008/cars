
<?php

echo"<pre>";
$s=$serv[0];

$det=$dets[0];
$update_odometer_url=base_url('/index.php/vehicles/update_odometer/'.$det->id);
$delete_url=base_url('/index.php/vehicles/are_u_sure_delete/'.$det->id);
    echo "<h3>Vehicle details</h3><br>";
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
    echo "kms driven : ".$det->odo. "  <a class='btn btn-primary btn-xs' href='$update_odometer_url'>update</a><br>";
    echo "comments : ".$det->comments . "<br>";
    echo "active : ".$det->active . "<br>";

echo "<h3>Vehicle details</h3><br>";
    echo "next regular service at : ". $s->reg_km ." kms or at date ". $s->reg_date ." what ever comes first <br>";
    echo "next oil service at : ". $s->oil_km ." kms or at date ". $s->oil_date ." what ever comes first";

echo "<br>";
echo "<a class='btn btn-primary btn-xs' href='$delete_url'>delete</a>";