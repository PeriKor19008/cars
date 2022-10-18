<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
$this->load->view("navbar") ;
$add_service_url=base_url('/index.php/services/new_service');

echo "<pre>";
print_r($services);
echo "<a class='btn btn-primary btn-xs' href='$add_service_url'>new service</a><br>";
foreach ($services as $service){

    echo $service->license_plate ."<br>";
    echo $service->manufacturer ."<br>";
    echo $service->model ."<br>";
    echo $service->color ."<br>";
    echo $service->date ."<br>";
    echo $service->name ."<br>";

}

?>
