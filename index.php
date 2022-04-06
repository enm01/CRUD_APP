<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD_APP</title>
</head>
<body>
    <p>pour ajouter votre produit veuillez entrer les information ci dessous .</p>
    <?php
        require 'connexion.php';
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $req="SELECT * FROM produits where id='$id'";
            $query=mysqli_query($cnx,$req);
            $rows=mysqli_fetch_assoc($query);
            $name=$rows['nom'];
            $price=$rows['prix'];
            $description=$rows['description'];
        }
        

    ?>



    <form method="POST" action="insert.php">

        <fieldset>
            <label >nom :</label>
            <input type="text" name="nom"  placeholder="nom du produit " value="<?php if(isset($_GET['id'])){echo $name;} ?>">

            <br><br>
            <label >prix :</label>
            <input type="number" name="prix"  placeholder="prix du produit " value="<?php if(isset($_GET['id'])){ echo $price;} ?>">
                <br><br>
            <label >description :</label>
            <input type="text" name="description"  placeholder="description du produit" value="<?php if(isset($_GET['id'])){echo $description;} ?>" >
            <br><br>
            <button type="submit">
                <?php
                if(isset($_GET['id'])){
                    echo "modifier";
                }else{
                    echo "envoyer";
                }
                ?>
            </button>
        </fieldset>
        
    </form>

<!-- <a href="read.php">cliquer ici pour afficher la liste des produits .</a> -->

    
</body>
</html>