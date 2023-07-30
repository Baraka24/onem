<?php
$nbreU=mysqli_query($con,"SELECT COUNT(*) AS nbreU FROM `utilisateur`");
$nbreU=mysqli_fetch_array($nbreU);
?>