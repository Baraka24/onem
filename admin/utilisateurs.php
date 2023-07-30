<?php
session_start();
require_once 'includes/config.php';
/* if(!isset($_SESSION['id']))
{
    header('Location:index.php');
}
$directeur=$_SESSION['id'];*/
include 'actions/selectU.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>UsersPage</title>
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
 		<button type="button" class="btn  btn-md btn-info" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
            Creer nouveau utilisateur
        </button> <br> <br>


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



<!-- Modale utilisateurs -->
  <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-success text-center" id="exampleModalCenteredScrollableTitle">Completer ces champs pour creer un utilisateur.</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="actions/ajouterU.php" class="form-control" enctype="multipart/form-data">
        	<div class="form-floating">
        		<input type="text" placeholder="Nom" class="form-control" name="nom" id="floatingInput" required>
        		<label for="Nom"><b>Votre nom</b></label>
		    </div>
		<br>
		    <div class="form-floating">
        		<input type="text" placeholder="Postnom" class="form-control" name="postnom" id="floatingInput" required>
        		<label for="Postnom"><b>Postnom</b></label>
		    </div>
    <br>
    		<div class="form-floating">
        		<input type="text" placeholder="Prenom" class="form-control" name="prenom" id="floatingInput" required>
        		<label for="prenom"><b>Prenom</b></label>
		    </div>
		<br>
        <fieldset class="mb-3">
            <legend>Genre</legend>
              <div class="form-check">
                <input type="radio" name="genre" value="Masculin" checked class="form-check-input">
                <label class="form-check-label" for="disabledRadio1">Masculin</label>
              </div>
              <div class="mb-3 form-check">
                <input type="radio" name="genre" value="Feminin" class="form-check-input">
                <label class="form-check-label" for="disabledRadio2">Feminin</label>
              </div>
            </fieldset>
    
		    <div class="form-floating">
        		<input type="text" placeholder="telephone" class="form-control" name="telephone" id="floatingInput" required>
        		<label for="telephone"><b>Téléphone</b></label>
		    </div>  
    <br>
        <div class="form-floating">
            <input type="text" placeholder="adresse" class="form-control" name="adresse" id="floatingInput" required>
            <label for="Adresse"><b>Adresse</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input type="mail" placeholder="adresseMail" class="form-control" name="mail" id="floatingInput" required>
            <label for="adresseMail"><b>Mail</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input type="file" name="file" id="floatingInput" required>
            <label for="adresseMail"><b>Image</b></label>
        </div>
    <br> 
        <div>
          <select class="form-control" name="role" required>
            <option value="" selected disabled>Selectionner un rôle</option>
            <option value="Demandeur">Demandeur</option>
            <option value="Offreur">Offreur</option>
            <option value="Admin">Admin</option>
          </select >
        </div>
    <br>
    <br>
        <div class="form-floating">
            <input type="mail" placeholder="adresseMail" class="form-control" name="pwd" id="floatingInput" required>
            <label for="adresseMail"><b>Mot de passe</b></label>
        </div>
    <br>

    		<center><button class="btn btn-lg btn-success" name="submit" >Creer</button><br><br></center>
  		</form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<!-- /Modale utilisateurs/ -->

<!-- tableau utilisateurs -->
<div class="table-responsive mt-3">
<table class="table">
  <tr class="bg-success">
    <th>N°</th>
    <th>Nom</th>
    <th>Postnom</th>
    <th>Prenom</th>
    <th>Genre</th>
    <th>Téléphone</th>
    <th>Adresse</th>
    <th>Mail</th>
    <th>Role</th>
    <th>Mot de passe</th>
    <th></th>
  </tr>
  <?php
        
        $i=0;

        foreach($rows as $row):
          $i++;
         ?>
  <tr>
    <td><?=$i?></td>
    <td><?=$row["nom"]?></td>
    <td><?=$row["postnom"]?></td>
    <td><?=$row["prenom"]?></td>
    <td><?=$row["genre"]?></td>
    <td><?=$row["telephone"]?></td>
    <td><?=$row["adresse"]?></td>
    <td><?=$row["mail"]?></td>
    <td><?=$row["role"]?></td>
    <td><?=$row["pwd"]?></td>
    <td>
    <center>
          <a href="editerU.php?id=<?= $row['id']?>"> 
          <span class="badge bg-warning text-dark">
            Editer
          </span>
          </a><br><br>
          <a href="actions/supprimerU.php?id=<?= $row['id']?>"> 
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

<!-- /tableau utilisateurs/ -->





 	
       
 	</div>
 	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>
