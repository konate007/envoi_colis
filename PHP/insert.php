<?php
//Se connecter au serveur de données
require_once('connexion_db.php');
//Recuperer les données venant du formulaire
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe=$_POST['sexe'];
$wing=$_POST['wing'];
$email=$_POST['email'];
$men=$_POST['men'];
$mdp1=$_POST['mdp1'];
$mdp1Hash=sha1($mdp1); 
if($wing=="expediteur"){
    //Formater la requete SQL
$sql="insert into expediteur values(null,'$nom','$prenom','$sexe','$men','$email','$mdp1Hash')";
}else
{
    $sql="insert into transporteur values(null,'$nom','$prenom','$sexe','$men','$email','$mdp1Hash')";
}
//Executer la requete SQL
$is_inserted= mysqli_query($cnx,$sql) or die(mysqli_error($cnx));
//Afficher un message
echo'<h2>Merci!!! Votre inscription a été enregistré avec succès<img src="../images/img8.jpg" width="30px"></h2>';
echo'<br>';
echo'<h2><a class="navbar-brand js-scroll-trigger" href="sortie.php">Deconnexion</a></h2>';
?>