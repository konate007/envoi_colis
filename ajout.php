<?php
//Appel du fichier de connexion
require_once('./connexion_db.php');
//Récupération des données par post
$L_dep=$_POST['L_dep'];
$L_arr=$_POST['L_arr'];
$D_dep=$_POST['D_dep'];
$D_arr=$_POST['D_arr'];
$D_clo=$_POST['D_clo'];
$quant=$_POST['quant'];
$lee=$_POST['lee'];
$lo=$_POST['lo'];
$quant=$_POST['quant'];
$val=$_POST['val'];
$num=$_POST['num'];

//Définition de la requête d'insertion
$sql_ajout="insert into annonce values(null,'$L_dep',
        '$L_arr','$D_dep','$D_arr','$D_clo','$lee','$lo','$quant','$val',$num)";
//Exécution de la requête
$query_ajout=mysqli_query($cnx,$sql_ajout) or die(mysqli_error($cnx));
header("location:./PHP/fin.php");
?>