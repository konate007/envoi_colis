<?php
session_start();
     if(!isset($_SESSION['email_exp'])){//Si la variable session a �t� cr�ee
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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Envoi-colis</a>
      <a class="navbar-brand js-scroll-trigger" href="sortie.php">Deconnexion</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
  <form class="form-inline" method="POST" action="trouve.php"> 
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Je veux envoyer un colis de</label>
    <input type="text"  class="form-control"  name="dep">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">à</label>
    <input type="text" class="form-control"  name="arr">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">à partir du</label>
    <input type="text" class="form-control"  value="<?php echo $today ?>">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Rechercher</button>
</form>
 <table class="table">
 <caption>Informations du voyage</caption>
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
                    $sql_annonce= "select *from annonce ";
                    $query_annonce=mysqli_query($cnx,$sql_annonce) or die("erreur lors de l'affichage");
                    while($part=mysqli_fetch_array($query_annonce)){
                        //Tant qu'on extrait des lignes sous forme de tableau associatif
                        extract($part);
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
                        echo'<br>';
                    }
      ?>
      </table>
  </header>

 
  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Clis-GP</h4>
          <p class="lead mb-0">Partout dans le monde entier</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Around colis-gp</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-dribbble"></i>
          </a>
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">Clis-GP</h4>
          <p class="lead mb-0">facile d'utilisation 
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Colis-GP</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

</body>

</html>

