<!DOCTYPE html>
<html>
<head>
	<title>OffresOffreur</title>
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
    <div class="row">
      <div class="col-md-4"> 
        <form method="POST" class="form-control">
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
          <textarea class="form-control" name="critere"></textarea>
          <label for="critere"><b>Critères à remplire</b></label>
        </div>  
    <br>
        <div class="form-floating">
            <input type="date" placeholder="dateExpiration" class="form-control" name="dateExpiration" id="floatingInput" required>
            <label for="dateExpiration"><b>Date d'expiration</b></label>
        </div>
    <br>
        
        <center><button class="btn btn-lg btn-info" name="validate" >Publier</button><br><br></center>
      </form>
      </div>
<!-- limite --> <br>
      <div class="col-md-8"> 
    <!-- tableau utilisateurs -->
      <table class="table text-center">
        <tr class="bg-info">
          <th>##</th>
          <th>Date pub</th>
          <th>Entreprise</th>
          <th>Domaine</th>
          <th>Fonction</th>
          <th>Critères à remplire</th>
          <th>Date fin</th>
        </tr>
        <tr>
          <td>kkka</td>
          <td>djdjheg</td>
          <td>hdgfyhr</td>
          <td>dhdhdge</td>
          <td>dduu</td>
          <td>dheye</td>
          <td>sheyey</td>
        </tr>
      </table>
    <!-- /tableau offres/ -->
      </div>
    </div>
 	
       
 	</div>
 	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>
