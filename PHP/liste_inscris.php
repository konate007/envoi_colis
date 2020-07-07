<?php
//Appel du fichier de connexion à la bd
require_once('./PHP/connexion_db.php');
//Définition de la requête de sélection
$sql="select *from expediteur ";
//Exécution
$query_part=mysqli_query($cnx,$sql) or die("Erreur lors de l'insertion");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Liste des participants</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/style_form.css">
    
</head>
<body>
    <?php include "index.php"; ?>
<table>
    <caption>Liste des participants</caption>
    <tr>
        <th>Modification</th>
        <th>Suppression</th>
        <th>ID</th>
        <th>NOM</th>
        <th>Prénoms</th>
        <th>Sexe</th>
        <th>Tel</th>
        <th>E-mail</th>
        <th>mot de passe</th>
    </tr>
    <?php
     while($part=mysqli_fetch_array($query_part)){
        //Tant qu'on extrait des lignes sous forme de tableau associatif
        extract($part);
        echo"<tr>
        <th><a href='inscription2.php?id_expediteur=$id_expediteur'>Editer</a></th>
        <th><a href='supprim.php?id_expediteur=$id_expediteur'
            onclick=\"return confirm('Voulez vous supprimer $nom ? Oui ou Non?');\">Supprimer</a></th>
                <td>$id_expediteur</td>
                <td>$nom</td>
                <td>$prenom</td>
                <td>$sexe</td>
                <td>$tel</td>
                <td>$email</td>
                <td>$mdp</td>
            </tr>";
    }
   
    ?>
</table>


</body>
</html>
