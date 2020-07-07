<html>
<head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="../css/style2.css">
       <meta name="viewport" content="width=device-width,intial-scale=1">
</head>
<body>
     
     <h2>FORMULAIRE D'INSCRIPTION</h2>
     <form action="insert.php" method="POST">
    <table>
       <tr>
           <td>Prénoms</td><td><input name=prenom required></td>
       </tr>
       <tr>
           <td>NOM</td><td><input name="nom"  required></td>
       </tr>
       <tr>
           <td>Sexe</td>
           <td>
              <input type="radio" name="sexe" id="a" value="F"  required><label for="a">F</label>
              <input type="radio" name="sexe" id="b" value="M"  required><label for="b">M</label>
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
           <td>Email</td><td><input type="email" name="email"  required></td>
       </tr>
       <tr>
            <td>Tel</td><td><input type="tel" name="men"  required></td>
       </tr>
       <tr>
           <td>Password</td><td><input type="password" name="mdp1"  required></td>
       </tr>
       <tr>
           <td colspan="2" class><input type="submit" value="S'inscrire"></td>
       </tr>
</table>
</form>
<h2 style="text-align:center"> <a class="navbar-brand js-scroll-trigger" href="sortie.php">Deconnexion</a></h2>
</body>
</html>