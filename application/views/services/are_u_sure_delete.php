<?php
$delete_url=base_url('/index.php/services/delete/'.$id);

echo "<h1>Are you sure?</h1>";
echo "<a class='btn btn-primary btn-xs' href='$delete_url'>delete</a>";
