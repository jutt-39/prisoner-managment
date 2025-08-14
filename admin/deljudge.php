<?php

$delete=$_REQUEST['delete'];

$conection=mysqli_connect('localhost','root','','prison');

mysqli_query($conection,"delete from judge where judgeid='$delete'");

header("location:judgetable.php");
?>