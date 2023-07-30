<?php
session_start();
require_once 'includes/config.php';
/* if(!isset($_SESSION['id']))
{
    header('Location:index.php');
} */
include 'actions/selectUEdit.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>onem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="padding-top: 5.5rem;">
	<?php include 'includes/navbar.php'; ?>
  <br>
  <br>
  <br>
  <br>
  <br>
<div class="container mt-3 ">
  <h2 class="text-center">Editer utilisateur</h2>

  <div class="row col-12 rounded-3 shadow-lg"  id="dropdownMega">
    
  <form method="POST" action="actions/editerU.php?id=<?=$row["id"]?>" class="form-control" enctype="multipart/form-data">
        	<div class="form-floating">
        		<input value="<?=$row["nom"]?>" type="text" placeholder="Nom" class="form-control" name="nom" id="floatingInput" required>
        		<label for="Nom"><b>Votre nom</b></label>
		    </div>
		<br>
		    <div class="form-floating">
        		<input value="<?=$row["postnom"]?>" type="text" placeholder="Postnom" class="form-control" name="postnom" id="floatingInput" required>
        		<label for="Postnom"><b>Postnom</b></label>
		    </div>
    <br>
    		<div class="form-floating">
        		<input value="<?=$row["prenom"]?>" type="text" placeholder="Prenom" class="form-control" name="prenom" id="floatingInput" required>
        		<label for="prenom"><b>Prenom</b></label>
		    </div>
		<br>
        <fieldset class="mb-3">
            <legend>Genre</legend>
            <?php
            if($row["genre"]=="Masculin")
            {
              ?>
              <div class="form-check">
                <input type="radio" name="genre" value="Masculin" checked class="form-check-input">
                <label class="form-check-label" for="disabledRadio1">Masculin</label>
              </div>
              <div class="mb-3 form-check">
                <input type="radio" name="genre" value="Feminin" class="form-check-input">
                <label class="form-check-label" for="disabledRadio2">Feminin</label>
              </div>
              <?php
            }
            else
            {
              ?>
              <div class="form-check">
                <input type="radio" name="genre" value="Masculin"  class="form-check-input">
                <label class="form-check-label" for="disabledRadio1">Masculin</label>
              </div>
              <div class="mb-3 form-check">
                <input type="radio" name="genre" value="Feminin" class="form-check-input" checked>
                <label class="form-check-label" for="disabledRadio2">Feminin</label>
              </div>
              <?php
            }
            ?>
              
            </fieldset>
    
		    <div class="form-floating">
        		<input value="<?=$row["telephone"]?>" type="text" placeholder="telephone" class="form-control" name="telephone" id="floatingInput" required>
        		<label for="telephone"><b>Téléphone</b></label>
		    </div>  
    <br>
        <div class="form-floating">
            <input value="<?=$row["adresse"]?>" type="text" placeholder="adresse" class="form-control" name="adresse" id="floatingInput" required>
            <label for="Adresse"><b>Adresse</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input value="<?=$row["mail"]?>" type="mail" placeholder="adresseMail" class="form-control" name="mail" id="floatingInput" required>
            <label for="adresseMail"><b>Mail</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input type="file" name="file" id="floatingInput">
            <label for="adresseMail"><b>Image</b></label>
        </div>
    <br> 
        <div>
          <select class="form-control" name="role" required>
            <option value="<?=$row["role"]?>" selected><?=$row["role"]?></option>
            <option value="Demandeur">Demandeur</option>
            <option value="Offreur">Offreur</option>
            <option value="Admin">Admin</option>
          </select >
        </div>
    <br>
    <br>
        <div class="form-floating">
            <input value="<?=$row["pwd"]?>" type="mail" placeholder="adresseMail" class="form-control" name="pwd" id="floatingInput" required>
            <label for="adresseMail"><b>Mot de passe</b></label>
        </div>
    <br>

    		<center><button class="btn btn-lg btn-success" name="submit" >Appliquer</button><br><br></center>
  		</form>
</div>  
</div>




</body>
</html>
