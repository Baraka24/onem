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
?>
<!DOCTYPE html>
<html>
<head>
  <title>postuler</title>
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
    <form method="POST" action="actions/postuler.php?id=<?=$_GET['id']?>" class="form-control" enctype="multipart/form-data">
      <h3 class="text-center">Remplissez ce formulaire pour postuler à cet emploi!</h3>
          
        <div class="form-floating">
            <input type="file"  class="form-control" name="file" id="floatingInput" required>
            <label><b>Lettre de motivation</b></label>
          </div>
    <br>
        <div class="form-floating">
            <input type="file"  class="form-control" name="file1" id="floatingInput" required>
            <label><b>Curriculum Vitae</b></label>
          </div>
    <br>
          <div class="form-floating">
            <input type="file"  class="form-control" name="file2" id="floatingInput" required>
            <label><b>Documents Supplémentaires</b></label>
          </div>
    <br>
    <a href="##"></a>
      <button class="btn btn-lg btn-success" name="submit" >Envoyer</button>
    <a href="offres.php" style="float: right;" class="btn btn-sm btn-danger">Annuler</a>
    <br><br>
      </form>
        <br>
        
    </div>



  </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>
