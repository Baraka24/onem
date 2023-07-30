<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>onem</title>

  <?php include 'includes/bootstrap.php'; ?>
    <!-- Custom styles for this template -->
    <link href="includes/index.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h1 class="masthead-brand">
          	<img src="images/logo.png" width="100%" style="border-radius: 15px;">
          </h1> 
        <br>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Accueil</a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">Se connecter</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
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
        <h1 class="cover-heading">Office National de l'Emploi.</h1>
        <p class="lead text-center">Cette <b>carte</b> de demandeur d'emploie vous permet de postuler à une offre d'emploie et accompagner votre dossier au momment du visa de votre contrat de travail par l'Office National de l'Emploi.</p>
        <p class="lead">

          <a class="btn btn-lg btn-secondary bi bi-eye" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable"> Nos offres</a>
        </p>
      </main>

  <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container"> <br>
		<div class="row">
			<div class="col-md-12" >
				<p class=" lead text-dark text-center"><b>ONEM</b> est une institution publique de sécurité sociale qui gère le système d'assurence-chômage ainsi que certains mesures pour l'emploi.</p>
	<!-- Formulaire Authentification-->
				<form method="POST" action="actions/login.php" class="form-control" style="height: 100%">
					<h1 class="h2 mb-3 fw-normal text-center text-primary">Connectez-vous ici...!</h1>
					<div class="form-floating">
						<input type="email" placeholder="User name" class="form-control" name="uid" id="floatingInput" required>
						<label for="username"><b>Username</b></label>
		    		</div>
		    	  <br>
		    		<div class="form-floating">
						<input type="password" placeholder="User name" class="form-control" name="pwd" id="floatingInput" required>
						<label for="pwd"><b>Password</b></label>
		    		</div>
    			  <br>
    				<center><button class="btn btn-lg btn-primary" name="submit" >Se connecter</button><br><br></center>
		    		<p><a class="btn text-danger" data-bs-dismiss="modal" aria-label="Close" >je n'ai pas de compte !</a> </p>
  				</form>
  	<!-- /Formulaire/ Authentification-->
			</div>
		</div>
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
      <footer class="mastfoot mt-auto">
        <p> 
          <a class="bi bi-facebook btn btn-primary" href="https://www.facebook.com/chance.Sikuliwako.50"></a>
          <a class="bi bi-whatsapp btn btn-success" href="https://wa.me/+243971702417"></a>
          <a class="bi bi-telephone-inbound-fill btn btn-primary" href="tel:0971702417"></a>
          <a class="bi bi-envelope btn btn-danger" href="mailto:wakosikuli@gmail.com"></a>
        </p>
        <div class="inner">
          <p>&copy Copyright  <a href="##">Lablonde</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
