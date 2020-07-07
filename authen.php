<?php 
     require_once('./PHP/connexion_db.php');
     $mdp2=$_POST['mdp2'];
     $mdp2Hash=sha1($mdp2);
     $email2=$_POST['email2'];
     $sql_exp='select *from expediteur where mdp="'.$mdp2Hash.'" and email="'.$email2.'"';
     $query_exp=mysqli_query($cnx,$sql_exp) or die('desolez !');
     if(mysqli_fetch_array($query_exp)){

         //include("connexion.php");
         header("location:./PHP/envoyer.php");
         exit;
     }
     $sql_transp='select *from transporteur where mdp="'.$mdp2.'" and email="'.$email2.'"';
     $query_transp=mysqli_query($cnx,$sql_transp) or die('desolez !');
     if(mysqli_fetch_array($query_transp)){

         //include("connexion.php");
         include("./PHP/formulaire_annonce.php");
         exit;
     }
     else{

         include("./PHP/connexion.php");
         exit;
     }
     
?>