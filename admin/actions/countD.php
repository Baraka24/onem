<?php
$nbreD=mysqli_query($con,"SELECT COUNT(*) AS nbreD FROM `offre`");
$nbreD=mysqli_fetch_array($nbreD);
?>