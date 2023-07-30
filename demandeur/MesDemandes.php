<?php
session_start();
require_once '../admin/includes/config.php';
if(!isset($_SESSION['id']))
{
    header('Location:../index.php');
}
$utilisateur=$_SESSION['id'];
$nom=$_SESSION['nom']." ".$_SESSION['postnom']." ".$_SESSION['prenom'];
$mail=$_SESSION['email'];
$profile=$_SESSION['profile'];
include 'actions/selectD.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>MesDemandes</title>
  <meta charset="utf-8">
  <?php include 'includes/bootstrap.php'; ?>
  <style type="text/css">
    body {
      padding-top: 5.5rem;
      }
      .aa{
        text-align: center;
      }
      
  </style>
</head>
<body>
  <?php include 'includes/navbar.php'; ?>
  <div class="container">
        <!-- tableau utilisateurs -->
        <table class="table text-center">
        <tr class="bg-success">
          <th>##</th>
          <th>DatePost</th>
          <th>Offre</th>
          <th>LettreMotivation</th>
          <th>Curriculum Vitae</th>
          <th>Documents Supplémentaires</th>
          <th>Actions</th>
        </tr>
        <?php
        
        $i=0;

        foreach($rows as $row):
          $i++;
         ?>
        <tr>
          <td><?=$i?></td>
          <td><?=$row["datedemande"]?></td>
          <td>
           <?=$row["fonction"]." / ".$row["domaine"]." (".$row["entreprise"].")"?>
          </td>
          <td><?=$row["lettremotiv"]?><br> 
            <a href="actions/upload/<?=$row["lettremotiv"]?>" target="blank" class="btn btn-sm bg-secondary">Ouvrir</a>
          </td>
          <td><?=$row["cv"]?><br> 
            <a href="actions/upload/<?=$row["cv"]?>" target="blank" class="btn btn-sm bg-secondary">Ouvrir</a>
          </td>
         <td><?=$row["docsupp"]?><br> 
            <a href="actions/upload/<?=$row["docsupp"]?>" target="blank" class="btn btn-sm bg-secondary">Ouvrir</a>
          </td>
          <td> <br>
            <a href="actions/supprimerD.php?id=<?=$row["id"]?>">Contacter</a>
          </td>
        </tr>
    <?php  endforeach ?>
      </table>
    <!-- /tableau offres/ -->
        <br>
    </div>



  </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>
