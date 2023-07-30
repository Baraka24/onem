<?php
session_start();
require_once '../includes/config.php';
$sql = "DELETE FROM `utilisateur` WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    $_SESSION['alerteE']="Utilisateur supprimé avec succès!";
    header('Location:../utilisateurs.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>