<?php 

     require_once('connexion_db.php');
     $mdp2=$_POST['mdp2'];
     $mdp2Hash=sha1($mdp2);
     $email2=$_POST['email2'];
     //pour expediteur
     $sql_exp='select *from expediteur where mdp="'.$mdp2Hash.'" and email="'.$email2.'"';
     $query_exp=mysqli_query($cnx,$sql_exp) or die('desolez !');
     //pour transporteur
     $sql_trans='select *from transporteur where mdp="'.$mdp2Hash.'" and email="'.$email2.'"';
     $query_trans=mysqli_query($cnx,$sql_trans) or die('desolez !');
     $T=0;
     while($part_trans=mysqli_fetch_array($query_trans)){
        //Tant qu'on extrait des lignes sous forme de tableau associatif
        extract($part_trans);
        $T++;
    }
    $A=0;
    while($part_exp=mysqli_fetch_array($query_exp)){
        //Tant qu'on extrait des lignes sous forme de tableau associatif
        extract($part_exp);
        $A++;
    }
     if($A!=0){

        
         session_start();
         $_SESSION['email_exp']=$email2;
         header("location:envoyer.php");
         exit;
     }
     if($T!=0){

         session_start();
         $_SESSION['email_trans']=$email2;
         header("location:formulaire_annonce.php");
         exit;
     }
     if($T==0 and $A==0)
     {
        header("location:connexion.php");
     }
?>