<?php
$url="vehicles/new_vehicle_submit";
echo form_open($url,array(
    "method"=>"post",
    "class"=>"new_vehicle"


));

?>



<div >
    <div class="form-group">
        <input type="text" placeholder="license plate (XXX-0000)" name="license_plate"/>
    </div>

    <div class="form-group">
        <label>Vehicle type
            <select name="vehicle_type" >
                <?php
                $i=1;
                foreach ($result as $r){
                    echo"<option value='$i'>$r->type</option>";
                    $i++;
                }
                ?>
            </select>
        </label>
    </div>


    <div class="form-group">
        <label>Ownership type
            <select name="ownership_type">
                <option value="1">SuperCargo</option>
                <option value="2">I.X.</option>
            </select>
        </label>
    </div>



    <div class="form-group">
        <input type="text" placeholder="Owner" name="owner"/>
    </div>

    <div class="form-group">
        <label>Fuel
            <select name="ownership_type">
                <option value="1">Gasoline</option>
                <option value="2">Petrol</option>
                <option value="2">Electric</option>
            </select>
        </label>
    </div>


    <div class="form-group">
        <input type="text" placeholder="Manufacturer" name="manufacturer"/>
    </div>



    <div class="form-group">
        <input type="text" placeholder="Model" name="model"/>
    </div>

    <div class="form-group">
        <input type="text" placeholder="Color" name="color"/>
    </div>

    <div class="form-group">
        <input type="number" placeholder="Displasment" name="displasment"/>
    </div>


    <div class="form-group">
        <input type="number" placeholder="Year of manufacture" name="year_man"/>
    </div>

    <div class="form-group">
        <input type="number" placeholder="Year of first license" name="year_license"/>
    </div>

    <div class="form-group">
        <input type="number" placeholder="Year of purchase" name="year_purch"/>
    </div>



    <div class="form-group">
        <input type="number" placeholder="regular service -km" name="service_reg_km"/>
    </div>
    <div class="form-group">
        <input type="number" placeholder="Regular service -months" name="service_reg_months"/>
    </div>
    <div class="form-group">
        <input type="number" placeholder="Oil service -km" name="service_oil_km"/>
    </div>
    <div class="form-group">
        <input type="number" placeholder="Oil service -months" name="service_oil_months"/>
    </div>
    <div class="form-group">
        <input type="number" placeholder="Tyre change -km" name="service_tyre_km"/>
    </div>
    <div class="form-group">
        <input type="number" placeholder="KTEO -years" name="KTEO_years"/>
    </div>
    <div class="form-group">
        <input type="number" placeholder="emissions -years" name="emission_years"/>
    </div>
    <div class="form-group">
        <textarea name="comments" cols="40" rows="5" placeholder="Comments"></textarea>
    </div>
    <div class="form-group">
       <label>Active
           <input type='hidden' value='0' name='active'>
           <input type="checkbox" value="1" name="active"/>
       </label>
    </div>




    <br><br>
    <button type="submit" class="btn btn-primary btn-lg">Submit</button/>

</div>


<?php echo form_close(); ?>

