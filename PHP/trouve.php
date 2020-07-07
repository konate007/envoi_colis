<?php
session_start();
if(!isset($_SESSION['email_exp'])){
  //Si la variable session a �t� cr�ee
    header("connexion_exp.php");
    exit();
}
$today = date("d/m/y");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Colis</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="../css/freelancer.min.css" rel="stylesheet">

</head>
<body id="page-top">
  <h1>Informations du voyage</h1>
  <table class="table">
    <tr>
        <th>Lieu_depart</th>
        <th>Lieu_arrivee</th>
        <th>Date_depart</th>
        <th>Date_arrivee</th>
        <th>Date_cloture</th>
        <th>Moyen_tansport</th>
        <th>Moyen_paiement</th>
        <th>Nombre_kilo</th>
        <th>Prix</th>
        <th>Tel</th>
    </tr>
        <?php 
                    require_once('connexion_db.php');
                    $k=0;
                    $dep=$_POST['dep'];
                    $arr=$_POST['arr'];
                    $sql_ann='select *from annonce  where L_depart="'.$dep.'" and L_arrivee="'.$arr.'"';
                    $sql_anno='select *from annonce where L_depart!="'.$dep.'" or L_arrivee!="'.$arr.'"';
                    $query_anno=mysqli_query($cnx,$sql_anno) or die('desolez !');
                    $query_ann=mysqli_query($cnx,$sql_ann) or die('desolez !');
                    while($part=mysqli_fetch_array($query_ann)){
              //Tant qu'on extrait des lignes sous forme de tableau associatif
              extract($part);
              //var_dump($part);
              echo"<tr> 
                                <td>$L_depart</td>  
                                <td>$L_arrivee</td>
                                <td>$D_depart</td>
                                <td>$D_arrivee</td>
                                <td>$D_cloture</td>
                                <td>$M_tansport</td>
                                <td>$M_paiement</td>
                                <td>$nombre_kilo</td>
                                <td>$prix</td> 
                                <td>$tel</td>  
                    </tr>";
                echo'</br>';
                $k++;
     }
        ?>
        </table>
        <?php
          if(mysqli_fetch_array($query_anno) and $k==0)
          {
             echo"Desolez ! aucune annonce à destination de $arr pour le moment";
          }
          echo'</br>';
        ?>
    <a class="navbar-brand js-scroll-trigger" href="sortie.php">Deconnexion</a>
</body>
</html>

