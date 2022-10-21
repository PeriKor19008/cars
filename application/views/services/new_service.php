
<?php
/*echo "<pre>";
print_r($result[0]->license_plate);*/

$url="services/new_service_submit";
echo form_open($url,array(
    "method"=>"post",
    "class"=>"new_service",
    "id"=>"service_id"

));
?>
<div >



    <div class="form-group">
        <label>license plate
            <select name="car_id" >
                <?php

                foreach ($result as $r){
                    echo"<option value='$r->id'>$r->license_plate</option>";

                }
                ?>
            </select>
        </label>
    </div>





    <div class="form-group">
        <label>Date of service</label>
        <input type="date" placeholder="date of reading" name="date"/>
    </div>

    <div class="form-group">
        <input type="number" placeholder="km" name="km"/>
    </div>

    <div class="form-group">
        <input type="number" placeholder="price" name="price"/>
    </div>

    <div class="form-group">
    </div>

    <div class="form-group">
        <input type="text" placeholder="shop name" name="shop"/>
    </div>

    <div class="form-group">
        <input type="text" placeholder="comments" name="comments"/>
    </div>

    <div class="form-group">
        <input type="radio" id="regular" name="type" value=1>
        <label for="regular">Regular</label><br>
        <input type="radio" id="oil_change" name="type" value=2>
        <label for="oil_change">Oil change</label><br>
        <input type="radio" id="non_regular" name="type" value=3>
        <label for="non_regular">Non-regular</label>
    </div>

    <div class="form-group">
        <input type="number" placeholder="next reg service (km)" name="service_reg_km"/>
    </div>

    <div class="form-group">
        <label>Next reg service (date)</label>
        <input type="date"  name="service_reg_date"/>
    </div>

    <div class="form-group">
        <input type="number" placeholder="next oil change (km)" name="service_oil_km"/>
    </div>

    <div class="form-group">
        <label>Next oil change (date)</label>
        <input type="date"  name="service_oil_date"/>
    </div


    <br><br>
    <button type="submit" class="btn btn-primary btn-lg">Submit</button/>

</div>


    <?php echo form_close(); ?>

