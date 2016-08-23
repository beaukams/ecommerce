<?php
  session_start();

  if(!(isset($_SESSION['login']) && isset($_SESSION['nom']) )){
    header("Location: ./login.php");
  }else{ 

      if( !(isset($_POST['id_commande']) && file_exists("../server/requete.php") && file_exists("../config/base_config.php") ) ){
          header("Location: liste_commande.php");
      }else{
          include_once("../server/requete.php");
          include_once("../config/base_config.php");

          $base = new BaseDD();
      
          //selectionner la commande
          $id_commande = $_POST['id_commande'];
          $commande = $base->selectCommande($id_commande)[0];

          if(empty($commande)){
              header("Location: nouveau_commande.php");

          }else{

              //commande
              $num_commande = $commande[0];
              $date_commande = $commande[2];
              $heure_commande = $commande[3];
              $montant_commande = $commande[5];
              $a_livree = $commande[6];

              //livraison
              if($a_livree == -1){
                  $date_livraison = "";
                  $adresse_livraison = "";
                  $cout_livraison = "";

              }else{
                  $livraison = $base->selectLivraison($id_livraison, PDO::FETCH_ASSOC)[0];
                  $date_livraison = $livraison['date_livraison'];
                  $adresse_livraison = $livraison['adresse_livraison'];
                  $cout_livraison = $livraison['cout_livraison'];

              }

              //client
              $client = $base->selectClientById($commande[1], PDO::FETCH_ASSOC)[0];
              $nom_client = strtoupper($client['nom']) . " " . $client['prenom'];
              $mail = $client['mail'];
              $num_tel = $client['num_tel'];
              $num_client = $client['id_client'];

              //les produits
              $produits = $base->selectProduitCommande($id_commande);



          }
    ?>

              <!DOCTYPE html>
              <html lang="en">
                <head>
                  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                  <!-- Meta, title, CSS, favicons, etc. -->
                  <meta charset="utf-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1">

                  <title>Gestion de vente de légumes </title>

                  <link rel="stylesheet" type="text/css" href="./css/style.css"/>

                  <!-- Bootstrap -->
                  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
                  <!-- Font Awesome -->
                  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                  <!-- iCheck -->
                  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
                  <!-- bootstrap-wysiwyg -->
                  <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
                  <!-- Select2 -->
                  <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
                  <!-- Switchery -->
                  <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
                  <!-- starrr -->
                  <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">

                  <!-- Dropzone.js -->
                  <link href="../vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">

                  <!-- Custom Theme Style -->
                  <link href="../build/css/custom.min.css" rel="stylesheet">

                  <link href="production/css/style_facture1.css" rel="stylesheet">

                </head>


                <body class="nav-md">

                         

                          <!-- sidebar menu -->
                            <?php
                                    include_once("./menu.php");
                            ?>
                          <!-- /sidebar menu -->


                      <!-- top navigation -->
                          <?php
                              include_once "./top_navigation.php";
                          ?>
                      <!-- /top navigation -->

                      <!-- page content -->
                      <div class="right_col" role="main">
                        <div class="">
                          <div class="page-title">
                            <div class="title_left">
                              <h3>Gestion de vente</h3>
                            </div>

                            <div class="title_right">
                              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search for...">
                                  <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel">
                                <div class="x_title">
                                  <h2>Nouveau produit</h2>
                                  <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                      <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                  </ul>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="x_content" id="fact">
                                      <div id="t_header" class="clearfix">
                                        <div id="logo">
                                          <img src="logo.png">
                                        </div>
                                        <h1>FACTURE N°</span> <?php echo "$num_commande"; ?></h1>
                                        <div id="company" class="clearfix">
                                          <div>Dakar, </div>
                                          <div></span> <?php echo date('Y-i-d') . " à " . date('H:m:s'); ?></div>
                                          <div><a href="mailto:Abdoulayekama@gmail.com">Abdoulayekama@gmail.com</a></div>
                                        </div>
                                        <div id="project">
                                          <div><span>ABONNE N°</span> <?php echo "$num_client"; ?></div>
                                          <div><span>NOM</span> <?php echo "$nom_client"; ?></div>
                                          <div><span>ADRESSE DE LIVRAISON</span> <?php echo "$adresse_livraison"; ?></div>
                                          <div><span>TELEPHONE</span> <?php echo "$num_tel"; ?></div>
                                          <div><span>EMAIL</span> <a href=<?php echo "'$mail'"; ?>><?php echo "$mail"; ?></a></div>
                                          <div><span>DATE COMMANDE</span> <?php echo "$date_commande"; ?></div>
                                          <div><span>HEURE COMMANDE</span> <?php echo "$heure_commande"; ?></div>
                                          
                                        </div>
                                      </div>

                                      <main>
                                        <table>
                                          <thead>
                                            <tr>
                                              <th class="service">N°</th>
                                              <th class="desc">PRODUIT</th>
                                              <th>QTE</th>
                                              <th>PU (FCFA)</th>
                                              <th>TOTAL (FCFA)</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <?php
                                                for($i=0; $i<count($produits); $i++){
                                                    echo "<tr>";
                                                    echo "<td class='service'>" . $i . "</td>";
                                                    echo "<td class='desc'>" . $produits[$i]['nom_produit'] . "</td>";
                                                    echo "<td class='qty'>" . $produits[$i]['quantite'] . "</td>";
                                                    echo "<td class='unit'>" . $produits[$i]['prix_unitaire'] . "</td>";
                                                    echo "<td class='total'>" . $produits[$i]['prix'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                            
                                          </tbody>
                                        </table>
                                        <div id="notices">
                                          <div>NOTICE:</div>
                                          <div class="notice">ARRETEE CETTE PRESENTE FACTURE A LA SOMME DE </div>
                                        </div>
                                      </main>
                                      <div id="t_footer">
                                        Invoice was created on a computer and is valid without the signature and seal.
                                      </div>
                                </div>
                               
                              </div>
                            </div>
                          </div>

                          


                            
                      <!-- /page content -->

                      <!-- footer content -->
                      <?php
                             include_once "./footer.php";
                      ?>
                      <!-- /footer content -->
                    </div>
                  </div>

                  <!-- jQuery -->
                  <script src="../vendors/jquery/dist/jquery.min.js"></script>
                  <!-- Bootstrap -->
                  <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                  <!-- FastClick -->
                  <script src="../vendors/fastclick/lib/fastclick.js"></script>
                  <!-- NProgress -->
                  <script src="../vendors/nprogress/nprogress.js"></script>
                  <!-- bootstrap-progressbar -->
                  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

                  <!-- Dropzone.js -->
                  <script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

                  <!-- iCheck -->
                  <script src="../vendors/iCheck/icheck.min.js"></script>
                  <!-- bootstrap-daterangepicker -->
                  <script src="js/moment/moment.min.js"></script>
                  <script src="js/datepicker/daterangepicker.js"></script>
                  <!-- bootstrap-wysiwyg -->
                  <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
                  <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
                  <script src="../vendors/google-code-prettify/src/prettify.js"></script>
                  <!-- jQuery Tags Input -->
                  <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
                  <!-- Switchery -->
                  <script src="../vendors/switchery/dist/switchery.min.js"></script>
                  <!-- Select2 -->
                  <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
                  <!-- Parsley -->
                  <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
                  <!-- Autosize -->
                  <script src="../vendors/autosize/dist/autosize.min.js"></script>
                  <!-- jQuery autocomplete -->
                  <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
                  <!-- starrr -->
                  <script src="../vendors/starrr/dist/starrr.js"></script>

                  <!-- validator -->
                  <script src="../vendors/validator/validator.min.js"></script>

                  <!-- Custom Theme Scripts -->
                  <script src="../build/js/custom.min.js"></script>

                  

                 
                </body>
              </html>
  <?php
    }

    
  }
?>
