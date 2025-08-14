<?php

$delete=$_REQUEST['delete'];

$conection=mysqli_connect('localhost','root','','prison');

mysqli_query($conection,"delete from visitor where visitorid='$delete'");

header("location:visitortable.php");
?>