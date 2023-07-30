<?php
session_start();
require_once '../admin/includes/config.php';
if(isset($_POST['submit']))
{
    $userName =mysqli_real_escape_string($con,$_POST["uid"]);
    $userPass =mysqli_real_escape_string($con,$_POST["pwd"]);
    $roleD='Demandeur';
    $queryD = "SELECT * FROM `utilisateur` WHERE `mail`= '$userName' AND 
    `pwd` = '$userPass' AND `role`='$roleD'";
    $resultD = mysqli_query( $con, $queryD);
    $rowD = mysqli_fetch_array($resultD);


    $roleA='Admin';
    $queryA = "SELECT * FROM `utilisateur` WHERE `mail`= '$userName' AND 
    `pwd` = '$userPass' AND `role`='$roleA'";
    $resultA = mysqli_query( $con, $queryA);
    $rowA = mysqli_fetch_array($resultA);

    if($rowD)
    {
        $_SESSION['id']=$rowD['id'];
        $_SESSION['nom']=$rowD['nom'];
        $_SESSION['postnom']=$rowD['postnom'];
        $_SESSION['prenom']=$rowD['prenom'];
        $_SESSION['profile']=$rowD['image'];
        $_SESSION['email']=$rowD['mail'];
        header('Location:../demandeur/offres.php');

    }
    else if($rowA)
    {
        $_SESSION['id']=$rowA['id'];
        $_SESSION['nom']=$rowA['nom'];
        $_SESSION['postnom']=$rowA['postnom'];
        $_SESSION['prenom']=$rowA['prenom'];
        $_SESSION['profile']=$rowA['image'];
        $_SESSION['email']=$rowA['mail'];
        header('Location:../admin/index.php');

    }
    else
    {
        $_SESSION['alerteE']="Mot de passe ou Nom d'utilisateur incorrect!";
        header('Location:../index.php');
    }
}
?>