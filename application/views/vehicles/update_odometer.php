<?php
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
