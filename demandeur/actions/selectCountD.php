<?php
$nbreD=mysqli_query($con,"SELECT COUNT(`demande`.`id`) AS nbreD
  FROM `demande`,offre,utilisateur WHERE utilisateur.id=demande.utilisateur
   AND offre.id=demande.offre AND `demande`.`utilisateur`='$utilisateur'
");
$nbreD=mysqli_fetch_array($nbreD);
?>