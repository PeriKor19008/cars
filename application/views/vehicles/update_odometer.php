<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
$this->load->view("navbar") ;
$url="vehicles/update_odometer_submit/".$id;
echo form_open($url,array(
    "method"=>"post",
    "class"=>"update_odom",
    "id"=>"update_id"

));
?>
<input type="date" placeholder="date of reading" name="update_date"/>
<input type="number" placeholder="odometer reading" name="odometer_reading"/>
<button type="submit">Submit</button/>
    <?php echo form_close(); ?>
