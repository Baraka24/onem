
<?php
session_start();
require_once '../../admin/includes/config.php';
$utilisateur=$_SESSION['id'];
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

 $file1 = rand(1000,100000)."-".$_FILES['file1']['name'];
 $file1_loc = $_FILES['file1']['tmp_name'];
 $file1_size = $_FILES['file1']['size'];
 $file1_type = $_FILES['file1']['type'];
 $folder1="upload/";
 
 /* new file size in KB */
 /* $new_size = $file_size/1024;   */
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file1_name = strtolower($file1);
 /* make file name in lower case */
 
 $final_file1=str_replace(' ','-',$new_file1_name);
 

 $file2 = rand(2000,200000)."-".$_FILES['file2']['name'];
 $file2_loc = $_FILES['file2']['tmp_name'];
 $file2_size = $_FILES['file2']['size'];
 $file2_type = $_FILES['file2']['type'];
 $folder2="upload/";
 
 /* new file size in KB */
 /* $new_size = $file_size/2024;   */
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file2_name = strtolower($file2);
 /* make file name in lower case */
 
 $final_file2=str_replace(' ','-',$new_file2_name);
 if(move_uploaded_file($file_loc,$folder.$final_file) AND move_uploaded_file($file1_loc,$folder1.$final_file1) AND move_uploaded_file($file2_loc,$folder2.$final_file2))
 {
    $dateD=date('Y-m-d');
    $sql="INSERT INTO `demande`(`id`, `datedemande`, `lettremotiv`, `cv`,
     `docsupp`, `utilisateur`, `offre`)
      VALUES ('','$dateD','$final_file',
      '$final_file1','$final_file2',
      '$utilisateur','" . $_GET["id"] . "')";
      if (mysqli_query($con, $sql)) {
          $_SESSION['alerteS']="Vous avez postulez à cet emploi!";
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