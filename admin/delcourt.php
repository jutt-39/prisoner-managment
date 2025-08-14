<?php

$delete=$_REQUEST['delete'];

$conection=mysqli_connect('localhost','root','','prison');

mysqli_query($conection,"delete from court where courtid='$delete'");

header("location:courttable.php");
?>