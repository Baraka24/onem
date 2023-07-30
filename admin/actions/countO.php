<?php
$nbreO=mysqli_query($con,"SELECT COUNT(*) AS nbreO FROM `offre`");
$nbreO=mysqli_fetch_array($nbreO);
?>