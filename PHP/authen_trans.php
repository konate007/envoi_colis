<?php
    session_start();
    if(isset($_SESSION['email_trans'])){//Si la variable session a �t� cr�ee
    header("authen_trans.php");
    //exit();
}
     require_once('connexion_db.php');
     $T=0;
     $mdp_trans=$_POST['mdp_trans'];
     $mdp_transHash=sha1($mdp_trans);
     $email_trans=$_POST['email_trans'];
     $sql_trans='select *from transporteur  where mdp="'.$mdp_transHash.'" and email="'.$email_trans.'"';
     $query_trans=mysqli_query($cnx,$sql_trans) or die('desolez !');
     while($part_trans=mysqli_fetch_array($query_trans)){
        //Tant qu'on extrait des lignes sous forme de tableau associatif
        extract($part_trans);
        $T++;
    }
     if($T!=0)
     {
        $_SESSION['email_trans']=$email_trans;
         header("location:formulaire_annonce.php");
         exit();
     }
     else{
          include("connexion_trans.php");
         echo "<p style='text-align:center'>Desolez vous n'etes pas un transporteur !!!</p>";
     }  
?>