<?php
$E=0;  
$T=0;
//Disposer des nouvelles données du Eicipant
$email_r=$_POST['email_r'];
$mdp_r=$_POST['mdp_r'];
$mdp_rHash=sha1($mdp_r); 
//Se connecter au serveur de données
require_once('connexion_db.php');
$sql_E='select mdp from expediteur join concerner where email="'.$email_r.'"';
//Exécution
$query_E=mysqli_query($cnx,$sql_E) or die(mysqli_error($cnx));
while($part_E=mysqli_fetch_array($query_E)){
    //Tant qu'on extrait des lignes sous forme de tableau associatif
    extract($part_E);
    $E++;
    if($E!=0){
        //Formater la requete SQL
        $sql_update='update expediteur  set mdp="'.$mdp_rHash.'" where email="'.$email_r.'"';
        //Executer la requete SQL
        $query_update=mysqli_query($cnx,$sql_update) or die(mysqli_error($cnx));
    }
}
//exit();
$sql_T='select mdp from transporteur  where email="'.$email_r.'"';
//Exécution
$query_T=mysqli_query($cnx,$sql_T) or die(mysqli_error($cnx));
while($part_T=mysqli_fetch_array($query_T)){
    //Tant qu'on extrait des lignes sous forme de tableau associatif
    extract($part_T);
    $T++;
    if($T!=0)
    {
        $sql_update='update transporteur  set mdp="'.$mdp_rHash.'" where email="'.$email_r.'"';
        //Executer la requete SQL
        $query_update=mysqli_query($cnx,$sql_update) or die(mysqli_error($cnx));
    }
}
if($T==0){
    echo'<h2>Adresse email inorrect</h2>';
    echo'<h2><a href="sortie.php">Deconnexion </a></h2>';
}else{
echo'<h2><a href="sortie.php">Deconnexion </a></h2>';
}
?>