<html>
<head>
       <meta charset="utf-8">
       <link rel="stylesheet" href="./css/style.css">
       <meta name="viewport" content="width=device-width,intial-scale=1">
</head>
<body>
<h2><p style="text-align:center">Informations du voyage</p></h2>
<form action="ajout.php" method="POST">
 <table>
      <tr>
             <td><label>Lieu de depart:</label></td><td><input type="text" name="L_dep" required placeholder="Bamako"></td>
      </tr>
      </tr>
             <td><label>Lieu d'arrivée:</label></td><td><input type="text" name="L_arr" required placeholder="chine"></td>
      </tr>
      <tr>
             <td>Date de depart:</td><td><input type="date" name="D_dep"  required placeholder="13/02/2019"></td>
      </tr>
      <tr>
             <td>Date d'arrivée:</td><td><input type="date" name="D_arr"  required placeholder="23/02/2019"></td>
      </tr>
      <tr>
             <td>Date de cloture:</td><td><input type="date" name="D_clo"  required placeholder="13/03/2019"></td>
      </tr>
      <tr>
             <td>Quantité:</td><td><input type="number" name="quant"  required></td><td><label>Kg</label></td>
      </tr>
      <tr>
             <td>Type de bien:</td>
             <td><input type="radio" name="bruce" value="Colis"  required></td><td><label>Colis</label></td>
             <td><input type="radio" name="bruce"  value="Pli"  required></td><td><label >Pli</label></td>
       </tr>
      <tr>
            <td>Moyen de transport:</td>
             <td><input type="radio" name="lee" value="avion"  required></td><td><label>Avion</label></td>
            <td><input type="radio" name="lee"  value="car"  required></td><td><label>Car</label></td>
      </tr>
      <tr>
            <td>Moyen de paiement:</td>
            <td><input type="radio" name="lo" value="Carte bancaire"  required></td><td><label>Carte bancaire</label></td>
            <td><input type="radio" name="lo"  value="Paypal"  required></td><td><label>Paypal</label></td>
      </tr>
      <tr>
            <td>Tel:</td><td><input type="tel" name="num"  required></td>
      </tr>
      <tr>
            <td>Prix/kg:</td><td><input type="number" name="val"  required></td><td><label>fcfa</label></td>
      </tr>
      <tr>
               <td><input type="submit"  value="Publier"></td>
      </tr>
</table>
</form>
</body>
</html>