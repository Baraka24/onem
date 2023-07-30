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
include '../admin/actions/selectO.php'; 
include 'actions/selectCountD.php'; 
?>
<!DOCTYPE html> 
<html>
<head>
  <title>offres</title>
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
    <!-- firstRow -->
    <div class="aa"> 
      <img class="img-flui" src="../admin/actions/upload/<?=$profile?>" width="150px" height="250px" style="border-radius: 15px;"style="float: right;"> <br>
      <h4><?=$nom?> (<?=$mail?>)</h4>
    </div> 
  <!-- /firstRow/ -->
    <div class="row">
    <?php
   if(isset($_SESSION['alerteS']))
   {
    ?>
    <div class="alert alert-success">
    <strong>OK!</strong> <?= $_SESSION['alerteS']?>
    </div>
    <?php
   }
   unset($_SESSION['alerteS']);
  ?>
  <?php
  if(isset($_SESSION['alerteE']))
  {
   ?>
    <div class="alert alert-danger">
    <strong>Echec!</strong> <?= $_SESSION['alerteE']?>
    </div>
   <?php
  }
  unset($_SESSION['alerteE']);
  ?>
      <?php
        
        $i=0;

        foreach($rows as $row):
          $i++;
      ?>
      <div class="col-md-6 card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal text-center"><?=$row["entreprise"]?></h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><?=$row["domaine"]?>  /<small class="text-muted"> <?=$row["fonction"]?></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <h4><center>Critères</center></h4>
                <p>
                
                <a href="../admin/actions/upload/<?=$row["critere"]?>" target="blank">Voir les critères...</a>
                </p>
              </ul>
              <?php 
              $dateExp=date('Y-m-d');
              $exp=$row["dateexp"];
              if($exp<=$dateExp)
              {
                ?>
                <?php
              }
              else
              {
                ?>
                <a class="btn btn-primary bi bi-send btn-block" href="postuler.php?id=<?=$row["id"]?>">Postuler</a>
                <?php
              }
              ?>
              
              <span style="float: right; text-align: center;" class="text-primary">
              <?=$row["datepub"]?><br> <span><b>Date de publication.</b></span>
              </span>
              <span style="float: right; text-align: center;" class="text-danger">
              <?=$row["dateexp"]?><br> <span><b>Date d'expiration.</b></span>
              </span><br>
              <span style="float: right; text-align: center;" >
              <?php 
              $dateExp=date('Y-m-d');
              $exp=$row["dateexp"];
              if($exp<=$dateExp)
              {
                ?>
                 <br> <span class="text-danger"><b>Cette offre a expirée.</b></span>
                <?php
              }
              else
              {
                ?>
                <br> <span class="text-success"><b>Offre disponible.</b></span>
                <?php
              }
              ?>
              
              </span>
            </div>
          </div>
    <br>
    <?php  endforeach ?>
           <div class="col-md-6 card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal text-center">Mes demanendes</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><?=$nbreD["nbreD"]?><small class="text-muted">/ mo</small></h1>
             
              <a class="btn btn-lg btn-primary bi bi-eye btn-block" href="MesDemandes.php" style="width: 100%"> Details</a>
            </div>
          </div>
        <br>
    </div>



  </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>
