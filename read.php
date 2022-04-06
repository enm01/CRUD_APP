<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <h1>les données inserées :</h1><hr>
    

        <table border=1 weight=70%>
            <tr>
            <th>Nom du produit  </th>
            <th>Prix</th>
            <th>description</th>
            </tr>
            <?php
            require'connexion.php';
            $requete="select * from produits";
            $query=mysqli_query($cnx,$requete);

            while($rows=mysqli_fetch_assoc($query)){
                $id=$rows['id'];
                echo "<tr>";
                echo "<td>".$rows['nom']."</td>";
                echo "<td>".$rows['prix']."</td>";
                echo "<td>".$rows['description']."</td>"; 
                echo "<td><a href='delete.php?id=".$id."'>supprimer</a></td>";
                echo "<td><a href='index.php?id=".$id."'>modifier</a></td>";
                echo "</tr>";
            }
            ?>
        </table>

       

            


    
</body>
</html>