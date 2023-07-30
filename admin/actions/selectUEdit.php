<?php
$rows=mysqli_query($con,"SELECT * FROM `utilisateur` WHERE id='" . $_GET["id"] . "'");
$row=mysqli_fetch_array($rows);
?>