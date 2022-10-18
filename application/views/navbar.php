<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
$V_url=base_url('index.php/site/all_vehicles');
$S_url=base_url('/index.php/site/all_services');
$K_url=base_url('/index.php/site/all_kteo');
$url=base_url();
?>
<div >
    <nav class="navbar navbar-default ">
        <div class="container-fluid">
            <div class="navbar-header">
                <?php echo"<a class='navbar-brand' href='$url'>Vehicle-management-app</a>" ?>
            </div>
            <ul class="nav navbar-nav">
                <?php
                echo"<li><a href='$V_url'>Vehicles</a></li>";
                echo "<li><a href='$S_url'>Services</a></li>";
                echo "<li><a href='$K_url'>KTEO</a></li>"
                ?>
            </ul>
        </div>
    </nav>
</div>





