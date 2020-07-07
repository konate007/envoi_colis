<?php 
     require_once('./connexion_db.php');
     $mdp_exp=$_POST['mdp_exp'];
     $mdp_expHash=sha1($mdp_exp);
     $email_exp=$_POST['email_exp'];
     $sql_exp='select *from expediteur where mdp="'.$mdp_expHash.'" and email="'.$email_exp.'"';
     $query_exp=mysqli_query($cnx,$sql_exp) or die('desolez !');
     if(mysqli_fetch_array($query_exp))
     {
         //include("connexion.php");
         header("location:envoyer.php");
         exit;
     } else
     {
         include("connexion_exp.php");
         echo "<p style='text-align:center'>Desolez vous n'etes pas un expediteur !!!</p>";
     }
     
?>