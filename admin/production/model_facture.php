<?php
  
  if(isset($_GET['id_commande'])){
          include_once("../server/requete.php");
          include_once("../config/base_config.php");

          $base = new BaseDD();
      
          //selectionner la commande
          $id_commande = $_GET['id_commande'];
          $commande = $base->selectCommande($id_commande)[0];

          if(empty($commande)){
              header("Location: nouveau_commande.php");

          }else{

              //commande
              $num_commande = $commande[0];
              $date_commande = $commande[2];
              $heure_commande = $commande[3];
              $montant_commande = doubleval($commande[5]);
              $a_livree = $commande[6];

              //livraison
              if($a_livree == "-1"){
                  $date_livraison = "";
                  $adresse_livraison = "";
                  $cout_livraison = "";

              }else{
                  $id_livraison = $a_livree;
                  $livraison = $base->selectLivraison($id_livraison, PDO::FETCH_ASSOC)[0];
                  $date_livraison = $livraison['date_livraison'];
                  $adresse_livraison = $livraison['adresse_livraison'];
                  $cout_livraison = doubleval($livraison['cout_livraison']);
                  

              }

              //client
              $client = $base->selectClientById($commande[1], PDO::FETCH_ASSOC)[0];
              $nom_client = strtoupper($client['nom']) . " " . $client['prenom'];
              $mail = $client['mail'];
              $num_tel = $client['num_tel'];
              $num_client = $client['id_client'];

              //les produits
              $produits = $base->selectProduitCommande($id_commande, PDO::FETCH_ASSOC);

          }

?>
<!Doctype html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="style.css">
    <!--link rel="license" href="http://www.opensource.org/licenses/mit-license/"-->
    <script src="script.js"></script>
  </head>
  <body>
    <div id="html_fact">
    <div id="body_fact">
    <header>
      <h1>Facture</h1>
      <address contenteditable>
        <p>ABONNE N°: <?php echo "$num_client"; ?></p>
        <p>CLIENT: <?php echo "$nom_client"; ?></p>
        <p>ADDR LIVR: <?php echo "$adresse_livraison"; ?></p>
        <p>TEL:<?php echo "$num_tel"; ?></p>
        <p>MAIL:<?php echo "$mail"; ?></p>
      </address>
      <span><img alt="" src="images/logo_1.jpg" style="width:208px; height:100px;"><input type="file" accept="image/*"></span>
    </header>
    <article>
      <h1>Destinataire</h1>
      <address contenteditable>
        <p>Production et Vente de <br>Production Maraichères</p>
      </address>
      <table class="meta">
        <tr>
          <th><span contenteditable>Commande N°</span></th>
          <td><span contenteditable><?php echo "$num_commande"; ?></span></td>
        </tr>
        <tr>
          <th><span contenteditable>Dakar, le </span></th>
          <td><span contenteditable><?php echo date('d-m-Y') . " à " . date('H:i:s'); ?></span></td>
        </tr>
        <tr>
          <th><span contenteditable>Livraison</span></th>
          <td><span contenteditable>FCFA </span><span><?php echo " $cout_livraison"; ?></span></td>
        </tr>
        <tr>
          <th><span contenteditable>Montant</span></th>
          <td><span id="prefix" contenteditable>FCFA </span> <span> <?php echo " " . ($montant_commande+$cout_livraison); ?></span></td>
        </tr>
      </table>
      <table class="inventory">
        <thead>
          <tr>
            <th><span contenteditable>Produit</span></th>
            <th><span contenteditable>Description</span></th>
            <th><span contenteditable>Prix Unitaire (FCFA)</span></th>
            <th><span contenteditable>Quantité</span></th>
            <th><span contenteditable>Valeur (FCFA)</span></th>
          </tr>
        </thead>
        <tbody>

          <?php 
            for($i=0; $i<count($produits); $i++){

              echo "<tr>";
                echo "<td><a class='cut'>-</a><span contenteditable>" . ($i+1) . "</span></td>";
                echo "<td><span contenteditable>" . $produits[$i]['nom_produit'] . "</span></td>";                        
                echo "<td><span data-prefix></span><span contenteditable>" . $produits[$i]['prix_unitaire'] . "</span></td>";
                echo "<td><span contenteditable>" . $produits[$i]['quantite'] . "</span></td>";
                echo "<td><span data-prefix></span><span>" . $produits[$i]['prix'] . "</span></td>";
              echo "</tr>";
            }
          ?>
          <!--tr>
            <td><a class="cut">-</a><span contenteditable>Front End Consultation</span></td>
            <td><span contenteditable>Experience Review</span></td>
            <td><span data-prefix>$</span><span contenteditable>150.00</span></td>
            <td><span contenteditable>4</span></td>
            <td><span data-prefix>$</span><span>600.00</span></td>
          </tr-->
        </tbody>
      </table>
      <a class="add">+</a>
      <table class="balance">
        <tr>
          <th><span contenteditable>Total</span></th>
          <td><span data-prefix>FCFA </span><span>0.00</span></td>
        </tr>
        <tr hidden>
          <th><span contenteditable>Amount Paid</span></th>
          <td><span data-prefix>$</span><span contenteditable>0.00</span></td>
        </tr>
        <tr hidden>
          <th><span contenteditable>Balance Due</span></th>
          <td><span data-prefix>$</span><span>0.00</span></td>
        </tr>
      </table>
    </article>
    <aside>
      <h1><span contenteditable>Notes</span></h1>
      <div contenteditable>
        <p>Arretée, cette présente facture à la somme de <?php echo " " . $montant_commande; ?> FCFA</p>
        
      </div>
      <br/><br/><br/>
      <div contenteditable>
        <center><span>HANN MARISTE, TEL: 775296592/707195424/777539451</span></center>
      </div>
    </aside>
    </div>
    </div>
  </body>
</html> 
<?php
    }else{
        echo "pas de formulaire...";
    }
?>


