<?php
session_start();
require_once 'includes/config.php';
/* if(!isset($_SESSION['id']))
{
    header('Location:index.php');
} */
include 'actions/selectOEdit.php';

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
    
  <form method="POST" action="actions/editerO.php?id=<?=$row["id"]?>"  enctype="multipart/form-data" class="form-control">
          <div class="form-floating">
            <input value="<?=$row["entreprise"]?>" type="text" placeholder="Entreprise" class="form-control" name="entreprise" id="floatingInput" required>
            <label for="Entreprise"><b>Entreprise</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input value="<?=$row["domaine"]?>" type="text" placeholder="Domaine" class="form-control" name="domaine" id="floatingInput" required>
            <label for="Domaine"><b>Domaine</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input value="<?=$row["fonction"]?>" type="text" placeholder="fonction" class="form-control" name="fonction" id="floatingInput" required>
            <label for="fonction"><b>Fonction</b></label>
        </div>
    <br>
        <div class="form-floating">
            <input type="file"  class="form-control" name="file" id="floatingInput">
            <label><b>Critères à remplire</b></label>
          </div>  
    <br>
        <div class="form-floating">
            <input value="<?=$row["dateexp"]?>" type="date" placeholder="dateExpiration" class="form-control" name="dateExpiration" id="floatingInput" required>
            <label for="dateExpiration"><b>Date d'expiration</b></label>
        </div>
    <br>
        
        <center><button class="btn btn-lg btn-success" name="submit" >Appliquer</button><br><br></center>
      </form>
</div>  
</div>




</body>
</html>
