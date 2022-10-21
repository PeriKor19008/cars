
<?php
$V_url=base_url('index.php/site/all_vehicles');
$S_url=base_url('/index.php/site/all_services');
$K_url=base_url('/index.php/site/all_kteo');
$url=base_url();
?>
<div class="sticky-top" >
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="navbar-header">
                <?php echo"<a class='navbar-brand' href='$url'>Vehicle-management-app</a>" ?>
            </div >
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php
                    echo"<li class='nav-item' ><a class='nav-link active' href='$V_url'>Vehicles</a></li>";
                    echo "<li class='nav-item'><a class='nav-link active' href='$S_url'>Services</a></li>";
                    echo "<li class='nav-item'><a class='nav-link active' href='$K_url'>KTEO</a></li>"
                    ?>
                </ul>
            </div>

        </div>
    </nav>
</div>





