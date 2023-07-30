<?php
$rows=mysqli_query($con,"SELECT * FROM `offre` WHERE id='" . $_GET["id"] . "'");
$row=mysqli_fetch_array($rows);
?>