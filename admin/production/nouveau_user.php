<?php
  session_start();

  if(!(isset($_SESSION['login']) && isset($_SESSION['nom']) )){
    header("Location: ./login.php");
  }else{ 

      if( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['login']) && isset($_POST['pwd'])  && isset($_POST['mail']) && file_exists("../server/requete.php") && file_exists("../config/base_config.php") ){
          include_once("../server/requete.php");
          include_once("../config/base_config.php");
        
          if(isset($_POST['photo'])){
              $dossier = 'images/users';
              $fichier = basename($_FILES['photo']['name']);
              $taille_maxi = 1000000;
              $taille = filesize($_FILES['photo']['tmp_name']);
              $extensions = array('.png', '.gif', '.jpg', '.jpeg');
              $extension = strrchr($_FILES['photo']['name'], '.'); 
              //Début des vérifications de sécurité...

              if(!in_array($extension, $extensions)){
                  $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
              }
              if($taille>$taille_maxi){
                  $erreur = 'Le fichier est trop gros...';
              }
              if(!isset($erreur)){
                   //On formate le nom du fichier ici...
                  $fichier = strtr($fichier,'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ','AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                  $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

                  $photo = "$dossier/$fichier";
                  if(move_uploaded_file($_FILES['photo']['tmp_name'], "$photo")){
                      
                  }
                  else{
                    $photo = "";
                  //  echo "<script type='text/javascript'>alert('Vous n\'avez pas saisie d\'images');</script>";
                  }
              }
              else{
                   //echo $erreur;
              }

          }else{
              $photo = "";
          }
          


          $base = new BaseDD();
          $res = $base->adduser($_POST['nom'], $_POST['prenom'], $_POST['login'], $_POST['pwd'], $_POST['mail'], $photo);

          if($res != -1)
              header("Location: liste_user.php");


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
                                  <h2>Nouvel Utilisateur</h2>
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
                                <div class="x_content">
                                  <br />
                                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="nouveau_user.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="login" >Login <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="login" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" placeholder="Login" name="login"/>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="nom">Nom<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nom" name="nom" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nom d'Utilisateur"/>
                                      </div>
                                      
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="prenom">Prénom<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="prenom" name="prenom" required="required" class="form-control col-md-7 col-xs-12" placeholder="Prénom d'Utilisateur"/>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="photo">Image
                                      </label>
                                      <div class="col-md-4 col-sm-6 col-xs-12">

                                        <!-- taille limite de fichiers en octets -->
                                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000"> 

                                        <input type="file" id="photo" name="photo" class="form-control col-md-7 col-xs-12">
 
                                      </div>
                                    </div>
                                    <div class="form-group">
                                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="mail">Mail<span class="required">*</span></label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="email" id="mail" name="mail" required="required" class="form-control col-md-7 col-xs-12" placeholder="Adresse@Mail" autocomplete='off' value=""/>
                                                  </div>
                                     </div>
                                    
                                    <div class="form-group">
                                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="pwd">Mot de passe<span class="required">*</span></label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="password" id="pwd" name="pwd" required="required" autocomplete='off' class="form-control col-md-7 col-xs-12"/>
                                                  </div>
                                     </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-primary">Annuler</button>
                                        <button type="submit" class="btn btn-success">Valider</button>
                                      </div>
                                    </div>

                                  </form>
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
