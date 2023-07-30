
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
include 'actions/countU.php'; 
include 'actions/countO.php'; 
include 'actions/countD.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>indexAdmin</title>
	<meta charset="utf-8">
	<?php include 'includes/bootstrap.php'; ?>
	<style type="text/css">
		body {
			padding-top: 5.5rem;
			}
			.aa{
				display: inline-flex;
				width: 100%;
			}
			#a1{
				width: 33%;
			}
			#a3{
				width: 33%;
			}
			#a3{
				width: 33%;
			}
			
	</style>
</head>
<body>
	<?php include 'includes/navbar.php'; ?>
 	<div class="container-fluid">
 	<!-- firstRow -->
 		<div class="aa">      
 			<div id="a1">
 				<img class="img-flui" src="../images/dem.png" width="100%" height="250px" style="border-radius: 15px;">
 			</div>
 			<div id="a2">
 				<img class="img-flui" src="../images/logo.png" width="100%" height="250px" style="border-radius: 15px;">
 			</div>
 			<div id="a3">
 				<img class="img-flui" src="actions/upload/<?=$profile?>" width="150px" height="250px" style="border-radius: 15px;">
				 <h4><?=$nom?> (<?=$mail?>)</h4>
 			</div>
 			
 		</div> <br>
 	<!-- /firstRow/ -->
 		<div class="row">
 			<div class="col-md-4 card mb-4 box-shadow">
	          <div class="card-header">
	            <h4 class="my-0 font-weight-normal text-center">Nos offres</h4>
	          </div>
	          <div class="card-body">
	            <h1 class="card-title pricing-card-title"><?=$nbreO["nbreO"]?> <small class="text-muted">/ offres</small></h1>
	            <ul class="list-unstyled mt-3 mb-4">
	              <li>10 users included</li>
	              <li>2 GB of storage</li>
	              <li>Email support</li>
	              <li>Help center access</li>
	            </ul>
	            <a class="btn btn-lg btn-primary bi bi-eye btn-block" href="offres.php" style="width: 100%"> Details</a>
	          </div>
        	</div>
    <br>
            <div class="col-md-4 card mb-4 box-shadow">
	          <div class="card-header">
	            <h4 class="my-0 font-weight-normal text-center">Nos utilisateurs</h4>
	          </div>
	          <div class="card-body">
				  <ul class="list-unstyled mt-3 mb-4">
	            <h1 class="card-title pricing-card-title"><?=$nbreU["nbreU"]?> <small class="text-muted">/ utilisateurs</small></h1>
	              <li>10 users included</li>
	              <li>2 GB of storage</li>
	              <li>Email support</li>
	              <li>Help center access</li>
	            </ul>
	            <a class="btn btn-lg btn-primary bi bi-eye btn-block" href="utilisateurs.php" style="width: 100%"> Details</a>
	          </div>
        	</div>
    <br>
           <div class="col-md-4 card mb-4 box-shadow">
	          <div class="card-header">
	            <h4 class="my-0 font-weight-normal text-center">Demandes</h4>
	          </div>
	          <div class="card-body">
	            <h1 class="card-title pricing-card-title"><?=$nbreD["nbreD"]?> <small class="text-muted">/ Demandes</small></h1>
	            <ul class="list-unstyled mt-3 mb-4">
	              <li>10 users included</li>
	              <li>2 GB of storage</li>
	              <li>Email support</li>
	              <li>Help center access</li>
	            </ul>
	            <a class="btn btn-lg btn-primary bi bi-eye btn-block" href="demandes.php" style="width: 100%"> Details</a>
	          </div>
        	</div>
        <br>
        <?php include 'includes/footer.php'; ?>
 		</div>



 	</div>
 	<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 </body>
</html>
