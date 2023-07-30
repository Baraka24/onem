<?php
$rows=mysqli_query($con,"SELECT `demande`.`id` AS id, `demande`.`datedemande` 
AS datedemande, `demande`.`lettremotiv` AS lettremotiv, `demande`.`cv`
 AS cv, `demande`.`docsupp` AS docsupp, `demande`.`utilisateur` AS idUtilisateur, 
 `demande`.`offre` AS idOffre,utilisateur.nom AS nom,utilisateur.postnom AS postnom,
  utilisateur.prenom AS prenom, utilisateur.genre AS genre,
  utilisateur.telephone AS telephone,utilisateur.adresse AS adresse,
  utilisateur.mail AS mail,utilisateur.image AS image,offre.datepub AS datePub, 
  offre.entreprise AS entreprise, offre.fonction AS fonction, 
  offre.domaine as domaine, offre.critere AS critre, offre.dateexp as dateexp 
  FROM `demande`,offre,utilisateur WHERE utilisateur.id=demande.utilisateur
   AND offre.id=demande.offre AND `demande`.`utilisateur`='$utilisateur'
");
?>