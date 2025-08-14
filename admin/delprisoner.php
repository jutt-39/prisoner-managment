<?php

$delete=$_REQUEST['delete'];

$conection=mysqli_connect('localhost','root','','prison');

mysqli_query($conection,"delete from prisoner where prisonerid='$delete'");

header("location:prisonertable.php");
?>