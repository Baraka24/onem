
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
    $dateP=date('Y-m-d');
    $domaine=mysqli_real_escape_string($con,$_POST['domaine']);
    $fonction=mysqli_real_escape_string($con,$_POST['fonction']);
    $entreprise=mysqli_real_escape_string($con,$_POST['entreprise']);
    $dateExp=mysqli_real_escape_string($con,$_POST['dateExpiration']);
    $sql="INSERT INTO `offre`(`id`, `datepub`, `entreprise`, 
    `fonction`, `domaine`, `critere`, `dateexp`) 
    VALUES ('','$dateP','$entreprise',
    '$fonction','$domaine','$final_file',
    '$dateExp')";
      if (mysqli_query($con, $sql)) {
          $_SESSION['alerteS']="Offre publiée avec succès!";
          header('Location:../offres.php'); 
       } else {
          $_SESSION['alerteE']= "Error: " . $sql . " " . mysqli_error($con);
          header('Location:../offres.php');
       }  
 }
 else
 {
  $_SESSION['alerteE']= "Error.Please try again(Réessayer svp!)";
  header('Location:../offres.php');		
 }
}
    mysqli_close($con);
?>