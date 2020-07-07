<?php
//Appel du fichier de connexion
require_once('./connexion_db.php');
$wing=$_POST['wing'];
$id_transporteur=$_GET['id_transporteur'];
$id_expediteur=$_GET['id_expediteur'];
//Définition  et exécution de la requête de sélection
//if($wing=="expediteur"){
 //  $sql_fiche="select *from expediteur where id_expediteur='$id_expediteur'";
//}else{
    $sql_fiche="select *from expediteur where id_expediteur=$id_expediteur";
//}

$query_fiche= mysqli_query($cnx,$sql_fiche) or die('Erreur lors de l insertion');
//$fiche=$query_fiche->fetch(PDO::FETCH_NUM);
$fiche=mysqli_fetch_array($query_fiche);
//Extraction de l'enregistrement
extract($fiche);
?>
<html>
<head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="../css/style2.css">
       <meta name="viewport" content="width=device-width,intial-scale=1">
</head>
<body>
<a class="navbar-brand js-scroll-trigger" href="sortie.php">Deconnexion</a>
     <h2>FORMULAIRE D'INSCRIPTION</h2>
     <form action="modif.php" method="POST">
    <table>
       <tr>
           <td>Prénoms</td><td><input name=prenom required <?php echo "value='$fiche[2]'"?>></td>
       </tr>
       <tr>
           <td>NOM</td><td><input name="nom"  required <?php echo "value='$fiche[1]'"?>></td>
       </tr>
       <tr>
           <td>Sexe</td>
           <td>
              <input type="radio" name="sexe" id="a" value="F" <?php if($fiche[3]=="F") echo"checked" ?>  required><label for="a">F</label>
              <input type="radio" name="sexe" id="b" value="M" <?php if($fiche[3]=="M") echo"checked" ?> required><label for="b">M</label>
           </td>
       </tr>
       <tr>
       <td>type:</td>
           <td>
              <input type="radio" name="wing" id="c" value="expediteur"  required><label for="c">expediteur</label>
              <input type="radio" name="wing" id="d" value="transporteur"  required><label for="d">transporteur</label>
           </td>
       </tr>
       <tr>
           <td>Email</td><td><input type="email" name="email"  required <?php echo "value='$fiche[5]'"?>></td>
       </tr>
       <tr>
            <td>Tel</td><td><input type="tel" name="men"  required <?php echo "value='$fiche[4]'"?>></td>
       </tr>
       <tr>
           <td>Password</td><td><input type="password" name="mdp1"  required <?php echo "value='$fiche[6]'"?>></td>
       </tr>
       <tr >
                 <td colspan="2">
                    <input type="hidden" name="id_expeiteur" value="<?php echo $id_expediteur?>">
                    <input type="submit" name="inscription2" value="Modifier">
                </td>
            </tr>
</table>
</form>
</body>
</html>