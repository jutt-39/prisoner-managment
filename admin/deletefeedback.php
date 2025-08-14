<?php

$delete=$_REQUEST['delete'];

$conection=mysqli_connect('localhost','root','','prison');

mysqli_query($conection,"delete from feedback where feedbackid='$delete'");

header("location:feedback.php");
?>