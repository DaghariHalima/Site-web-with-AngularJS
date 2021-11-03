<?php

$serveurBD = "localhost";
$nomUtilisateur = "root";
$motDePasse = "";
$baseDeDonnees = "ProjetAngularJS";
$link = mysqli_connect($serveurBD, $nomUtilisateur, $motDePasse, $baseDeDonnees);
  $Username = $_POST ['Username'] ;
  $secondname = $_POST ['secondname'] ;
  $sexe = $_POST ['sexe'] ;
  $date = $_POST ['date'] ;
  $file=basename($_FILES["file"]["name"]);

  $requete="INSERT INTO `inscription`(`nom`, `prenom`,`sexe`, `date`, `certification`) VALUES ('$Username','$secondname','$sexe','$date',
  '$file');";

  mysqli_query($link,$requete);


//upload file
  $file = str_replace(' ', '_', $file);
  $file = str_replace('é', 'e', $file);
  $file = str_replace('è', 'e', $file);
  $file = str_replace('à', 'a', $file);
  $file = str_replace('-', '_', $file);
  $file = str_replace('/', '_', $file);
  $file = str_replace('@', '_', $file);

  //upload file   
  $target_dir = "file/";
  echo realpath($target_dir);
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $uploadOk = 1;
  // Check if image file is a actual image or fake image
  //if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
   // echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
  //} else {
  //  echo "Sorry, there was an error uploading your file.";
  //}

  


header('Location: inscription.html'); 


?>