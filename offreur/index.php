<!DOCTYPE html>
<html>
<head>
	<title>indexOffreur</title>
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
 			<img class="img-flui" src="../images/job.jpg" width="40%" height="250px" style="border-radius: 15px;"style="float: right;"> <br>
 			<h4>Noms</h4>
 		</div> 
 	<!-- /firstRow/ -->
 		<div class="row">
 			<div class="col-md-6 card mb-4 box-shadow">
	          <div class="card-header">
	            <h4 class="my-0 font-weight-normal text-center">Offres disponible</h4>
	          </div>
	          <div class="card-body">
	            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
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
           <div class="col-md-6 card mb-4 box-shadow">
	          <div class="card-header">
	            <h4 class="my-0 font-weight-normal text-center">Mes demanendes</h4>
	          </div>
	          <div class="card-body">
	            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
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
