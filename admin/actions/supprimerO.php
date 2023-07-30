<?php
session_start();
require_once '../includes/config.php';
$sql = "DELETE FROM `offre` WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    $_SESSION['alerteE']="Offre supprimée avec succès!";
    header('Location:../offres.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>