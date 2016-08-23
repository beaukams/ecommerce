<?php
  session_start();

  if(!(isset($_SESSION['login']) && isset($_SESSION['nom']) )){
    header("Location: ./login.php");
  }else{ 

      if( !(isset($_POST['id_commande']) && file_exists("../server/requete.php") && file_exists("../config/base_config.php") ) ){
          header("Location: liste_commande.php");
      }else{
          
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

                  <script type="text/javascript" langage="javascript">
                    function imprime(){
                      //window.print();
                      var iframe = document.getElementById("iframe_facture");
                      iframe.contentWindow.print();
                    }
                  </script>

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
                                  <h2>Génération de facture</h2>
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
                                <div>
                                    <button type="button" class="btn btn-primary" onclick="imprime();"><i class="fa fa-print"></i>PDF</button>
                                    <button type="button" class="btn btn-success">EXCEL</button>
                                </div>
                                <div class="x_content" id="fact" style="width: 100%; height: 800px;">
                                        <iframe id="iframe_facture" style="width: 100%; height: 100%;border:none;" name="iframe_facture" src="model_facture.php?id_commande=<?php echo $_POST['id_commande']; ?> ></iframe>
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


