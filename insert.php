<?php
$name=$_POST['nom'];
$price=$_POST['prix'];
$desc=$_POST['description'];
require'connexion.php';

$requete="INSERT INTO produits(nom,prix,description) VALUES('$name','$price','$desc')";
$query=mysqli_query($cnx,$requete);

if(isset($query)){
    echo"<h1> insertion avec success !</h1>";
}else{
    echo"<h1> erreur d'insertion !</h1>";
}

?>

<a href="read.php">cliquer ici pour afficher la liste des produits .</a>