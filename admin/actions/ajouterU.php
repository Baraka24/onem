<?php
session_start();
require_once '../includes/config.php';
$directeur=$_SESSION['id'];
if(isset($_POST['submit']))
{   
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
 
 /* new file size in KB */
 /* $new_size = $file_size/1024;   */
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
    $nom=mysqli_real_escape_string($con,$_POST['nom']);
    $postnom=mysqli_real_escape_string($con,$_POST['postnom']);
    $prenom=mysqli_real_escape_string($con,$_POST['prenom']);
    $genre=mysqli_real_escape_string($con,$_POST['genre']);
    $adresse=mysqli_real_escape_string($con,$_POST['adresse']);
    $mail=mysqli_real_escape_string($con,$_POST['mail']);
    $image=$final_file;
    $pwd=mysqli_real_escape_string($con,$_POST['pwd']);
    $telephone=mysqli_real_escape_string($con,$_POST['telephone']);
    $role=mysqli_real_escape_string($con,$_POST['role']);
    $sql="INSERT INTO `utilisateur`(`id`, `nom`, `postnom`, `prenom`, `genre`, 
    `telephone`, `adresse`, `role`, `pwd`, `image`, `mail`)
     VALUES ('','$nom','$postnom',
     '$prenom','$genre','$telephone','$adresse',
     '$role','$pwd','$image','$mail')";
      if (mysqli_query($con, $sql)) {
          $_SESSION['alerteS']="Utilisateur créé avec succès!";
          header('Location:../utilisateurs.php'); 
       } else {
          $_SESSION['alerteE']= "Error: " . $sql . " " . mysqli_error($con);
          header('Location:../utilisateurs.php');
       }  
 }
 else
 {
  $_SESSION['alerteE']= "Error.Please try again(Réessayer svp!)";
  header('Location:../news.php');		
 }
}
    mysqli_close($con);
?>