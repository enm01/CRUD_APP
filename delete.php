<?php
    require 'connexion.php';
    $id=$_GET['id'];
    $req_delete="DELETE FROM produits where id='$id'";
    $query=mysqli_query($cnx,$req_delete);
    if(isset($query)){
        header("location:read.php");
        echo "<h1>suppression avec success !</h1>";
    }else {
        echo "<h1>erreue de suppression</h1>";
    }

?>