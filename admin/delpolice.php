<?php

$delete=$_REQUEST['delete'];

$conection=mysqli_connect('localhost','root','','prison');

mysqli_query($conection,"delete from policestation where policeid='$delete'");

header("location:policetable.php");
?>