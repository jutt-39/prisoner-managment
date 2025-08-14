<?php

$delete=$_REQUEST['delete'];

$conection=mysqli_connect('localhost','root','','prison');

mysqli_query($conection,"delete from staff where staffid='$delete'");

header("location:stafftable.php");
?>