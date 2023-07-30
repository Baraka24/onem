
<?php
session_start();
require_once 'includes/config.php';
if(!isset($_SESSION['id']))
{
    header('Location:../index.php');
}
$utilisateur=$_SESSION['id'];
$nom=$_SESSION['nom']." ".$_SESSION['postnom']." ".$_SESSION['prenom'];
$mail=$_SESSION['email'];
$profile=$_SESSION['profile'];
include 'actions/selectO.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminOffres</title>
	<meta charset="utf-8">
	<?php include 'includes/bootstrap.php'; ?>
</head>
<body style="padding-top: 5.5rem;">
	<?php include 'includes/navbar.php'; ?>
  <br>
  <br>
  <br>
  <br>
  <br>

 	<div class="container-fluid">
    <h2>Offres</h2>
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

    <div class="row">
      <div class="col-md-4"> 
        <form method="POST" action="actions/ajouterO.php"  enctype="multipart/form-data" class="form-control">
          <div class="form-floating">
            <input type="text" placeholder="Entreprise" class="form-control" name="entreprise" id="floatingInput" required>
            <label for="Entreprise"><b>Entreprise</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input type="text" placeholder="Domaine" class="form-control" name="domaine" id="floatingInput" required>
            <label for="Domaine"><b>Domaine</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input type="text" placeholder="fonction" class="form-control" name="fonction" id="floatingInput" required>
            <label for="fonction"><b>Fonction</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input type="file"  class="form-control" name="file" id="floatingInput" required>
            <label><b>Critères à remplire</b></label>
          </div>  
    <br>
        <div class="form-floating">
            <input type="date" placeholder="dateExpiration" class="form-control" name="dateExpiration" id="floatingInput" required>
            <label for="dateExpiration"><b>Date d'expiration</b></label>
        </div>
    <br>
        
        <center><button class="btn btn-lg btn-success" name="submit" >Publier</button><br><br></center>
      </form>
      </div>
<!-- limite --> <br>
      <div class="col-md-8"> 
    <!-- tableau utilisateurs -->
    <div class="table-responsive mt-3">
      <table class="table text-center">
        <tr class="bg-success">
          <th>##</th>
          <th>Date pub</th>
          <th>Entreprise</th>
          <th>Domaine</th>
          <th>Fonction</th>
          <th>Critères à remplire</th>
          <th>Date fin</th>
          <th></th>
        </tr>
        <?php
        
        $i=0;

        foreach($rows as $row):
          $i++;
         ?>
        <tr>
          <td><?=$i?></td>
          <td><?=$row["datepub"]?></td>
          <td><?=$row["entreprise"]?></td>
          <td><?=$row["domaine"]?></td>
          <td><?=$row["fonction"]?></td>
          <td>
            <a href="actions/upload/<?=$row["critere"]?>" target="blank">Voir les critères...</a>
          </td>
          <td><?=$row["dateexp"]?></td>
          <td>
    <center>
          <a href="editerO.php?id=<?= $row['id']?>"> 
          <span class="badge bg-warning text-dark">
            Editer
          </span>
          </a><br><br>
          <a href="actions/supprimerO.php?id=<?= $row['id']?>"> 
          <span class="badge bg-danger" onclick="return confirm('Voulez-vous vraiment supprimé?')">
            Supprimer
          </span>
          </a>
    </center>
    </td> 
  </tr>
  <?php  endforeach ?>
      </table>
      </div>
    <!-- /tableau offres/ -->
      </div>
    </div>
 	
       
 	</div>
 	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>
