<?php
  session_start();

  if(!(isset($_SESSION['login']) && isset($_SESSION['nom']) )){

    header("Location: ./login.php");
  }else{ 

      if(file_exists("../server/requete.php") && file_exists("../config/base_config.php")){
          include_once("../server/requete.php");
          include_once("../config/base_config.php");

          $base = new BaseDD();
          $res = $base->selectAllProduit(PDO::FETCH_ASSOC);

       }                                                          
        
      if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['num_tel']) && isset($_POST['valeurs']) ){
        
          
          $nom = $_POST['nom'];
          $prenom = $_POST['prenom'];
          $num_tel = $_POST['num_tel'];
          $adresse = $_POST['adresse'];
          $mail = $_POST['mail'];

          //selectionner le client s'il existe déjà ou le créer
          $client = $base->selectClient($nom, $prenom, $num_tel)[0];

          if(empty($client)){
              $id_client = $base->addClient($nom, $prenom, $num_tel, $adresse, $mail);
          }else{
            $id_client = $client[0];
          }

          //creer la commande
          $date_commande = $_POST['date_commande'];//date("Y-m-d");
          $heure_commande = $_POST['heure_commande'];//date("h:i:s");
          $id_commande = $base->addCommande($id_client, $date_commande, $heure_commande);

          //ajouter les produits à la commande
          $valeurs = $_POST['valeurs'];
          $indexes = $_POST['indexes'];
          $quantites = $_POST['quantite'];
          $total = $_POST['total'];

          $prix_total = 0.0;

          for($i=0; $i<count($valeurs); $i++){
               // $produit = $res[intval($valeurs[$i])];
                $id_produit = intval($indexes[intval($valeurs[$i])]);
                $quantite = $quantites[intval($valeurs[$i])];
                $prix = $total[intval($valeurs[$i])]; 
                $base->addProduitCommande($id_commande, $id_produit, $quantite, $prix);

                $prix_total += doubleval($prix);
                
          }
          
          //gérer la livraison s'il y'en a
          if(isset($_POST['livree']) && $_POST['livree'] == '1'){


              //ajouter la livraison
              $id_livr = $base->addLivraison($id_commande, $_POST['date_livraison'], $_POST['addresse_livraison'], $_POST['cout_livraison']);
              

              if($id_livr != -1){
                  $prix_total += doubleval($_POST['cout_livraison']);
                  $base->modifyCommandePT($id_commande, $prix_total, $id_livr);
              }
              else
                  $base->modifyCommandePT($id_commande, $prix_total);
          }else{
              $base->modifyCommandePT($id_commande, $prix_total);
          }

          include_once("facture.php");



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
                                  <h2>Nouvelle commande</h2>
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
                                    <form id="form_commande" data-parsley-validate class="form-horizontal form-label-left" method="post" action="nouveau_commande.php" enctype="multipart/form-data">
                                      <!-- Smart Wizard -->
                                        <p>Entrer les renseignements du client et choisissez la liste des porduits...</p>
                                        <div id="wizard" class="form_wizard wizard_horizontal">
                                          <ul class="wizard_steps">
                                            <li>
                                              <a href="#step-1">
                                                <span class="step_no">1</span>
                                                <span class="step_descr">
                                                                  Phase 1<br />
                                                                  <small>Client</small>
                                                              </span>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#step-2">
                                                <span class="step_no">2</span>
                                                <span class="step_descr">
                                                                  Phase 2<br />
                                                                  <small>Produit</small>
                                                              </span>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#step-3">
                                                <span class="step_no">3</span>
                                                <span class="step_descr">
                                                                  Phase 3<br />
                                                                  <small>Livraison</small>
                                                              </span>
                                              </a>
                                            </li>
                                            <li>
                                              <a href="#step-4">
                                                <span class="step_no">4</span>
                                                <span class="step_descr">
                                                                  Step 4<br />
                                                                  <small>Validation</small>
                                                              </span>
                                              </a>
                                            </li>
                                          </ul>
                                          <div id="step-1">
                                              <h1 class="StepTitle"><center>Client</center></h1><br/><br/>
                                                <div class="form-group">
                                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="nom" >Nom client <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="nom" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" placeholder="Nom" name="nom"/>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="prenom">Prénom Client <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="prenom" name="prenom" required="required" class="form-control col-md-7 col-xs-12" placeholder="Prénom"/>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="num_tel">Numéro Telephone <span class="required">*</span>
                                                  </label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="tel" id="num_tel" name="num_tel" required="required" class="form-control col-md-7 col-xs-12" placeholder="Telephone"/>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="adresse">Adresse</label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="adresse" name="adresse" required="required" class="form-control col-md-7 col-xs-12" placeholder="Adresse"/>
                                                  </div>
                                                </div>

                                                <div class="form-group">
                                                  <label class="control-label col-md-2 col-sm-3 col-xs-12" for="mail">Mail</label>
                                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="email" id="mail" name="mail" required="required" class="form-control col-md-7 col-xs-12" placeholder="Adresse@Mail"/>
                                                  </div>
                                                </div>
                                                
                                                <div class="ln_solid"></div>

                                                </div>
                                                <div id="step-2">
                                                  <h1 class="StepTitle"><center>Produits</center></h1><br/><br/>
                                                    <div class="form-group">
                                                          <div class="col-md-9 col-sm-10 col-xs-12">
                                                            <div class="table-responsive">
                                                              <table class="table table-striped jambo_table bulk_action ">
                                                                <thead>
                                                                  <tr class="headings">
                                                                    <th>
                                                                      <input type="checkbox" id="check_all" onchange="tout_coche(this)">
                                                                    </th>
                                                                    <th class="column-title"> Libelle </th>
                                                                    <th class="column-title"> Categorie </th>
                                                                    <th class="column-title"> Prix unitaire (FCFA) </th>
                                                                    <th class="column-title"> Quantite </th>
                                                                    <th class="column-title"> Prix total (FCFA) </th>
                                                                    
                                                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                                                    </th>
                                                                    <th class="bulk-actions" colspan="7">
                                                                      <a class="antoo" style="color:#fff; font-weight:500;">Vous avez selectionner ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                                                    </th>
                                                                  </tr>
                                                                </thead>

                                                                <tbody id="tbody_prod">
                                                                  
                                                                     <?php


                                                                          if(isset($res)){

                                                                                for($i=0; $i<count($res); $i++) {
                                                                                  if($i%2==0)
                                                                                      echo "<tr class='odd pointer'>";
                                                                                  else
                                                                                      echo "<tr class='even pointer'>";
                                                                                  echo "<td class='a-center ' ><input type='checkbox' onchange='majPrix(this)' class='valeurs_id' name='valeurs[]' value=" . $i . "><input type='number' name='indexes[]' value=" . $res[$i]['id_produit'] . " hidden>";
                                                                                  echo "<td class='valeurs_nom'>" . $res[$i]['nom_produit'] . "</td>";
                                                                                  echo "<td class='valeurs_cat'>" . $res[$i]['type_produit'] . "</td>";
                                                                                  echo "<td class='valeurs_pu'>" . $res[$i]['prix_unitaire'] . "</td>";
                                                                                  echo "<td contenteditable='true'><input class='valeurs_qte' name='quantite[]' value='0' type='number' onkeyup='calculPrix(this)' onchange='calculPrix(this)' min='0'/><input type='number' min='0' value='0' name='total[]' hidden></td>";
                                                                                  echo "<td class='valeurs_tot'>0</td>";
                                                                                  echo "<td class='last'><a href='#'>Details</a></td>";
                                                                                  echo "</tr>";
                                                                                }
                                                                          }
                                                                    ?>
                                                                  
                                                                </tbody>
                                                              </table>
                                                            </div>
                                                          </div>

                                                          <div class="col-md-2 col-sm-2 col-xs-12">
                                                             
                                                                  <label class="control-label col-md-1 col-sm-1 col-xs-12" style="font-size:50px;">Total:</label><br/><br/><br/>
                                                                  <label class="control-label col-md-1 col-sm-1 col-xs-12" style="font-size:30px; color:red;"><h1 id='total_com' style="font-size:60px;">0</h1> FCFA</label>
                                                              
                                                          </div>
                                                    </div>
                                                </div>
                                                <div id="step-3">
                                                  <h2 class="StepTitle">Livraison</h2>
                                                  <br/>
                                                  <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                                          <input type="checkbox" class="js-switch" id='livree' name='livree' value='1' onchange='a_livrer(this)' checked/> Livraison
                                                        </label>
                                                  </div></br>
                                                  <div id="choix_livraison">

                                                      <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date de livraison <span>*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="date_livraison" name='date_livraison' class="date-picker form-control col-md-7 col-xs-12" type="date">
                                                            
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adresse de livraison <span>*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="addresse_livraison" type="text" name="addresse_livraison" class="form-control col-md-7 col-xs-12" placeholder="Adresse">
                                                            
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Coût livraison <span>*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="cout_livraison" type="text" name="cout_livraison" class="form-control col-md-7 col-xs-12" placeholder="cout (FCFA)">
                                                            
                                                        </div>
                                                      </div>
                                                  </div>

                                                </div>
                                                <div id="step-4">
                                                  <h2 class="StepTitle">Validation</h2>
                                                  <div id="etape_validation">
                                                  </div>
                                                </div>

                                        </div>
                                        <!-- End SmartWizard Content -->
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

                  <!-- jQuery Smart Wizard -->
                  <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

                   <!-- jQuery Smart Wizard -->
                    <script>

                        $(document).ready(function(){
                          // Smart Wizard       

                          $('#wizard').smartWizard({
                            transitionEffect:'fade',
                            onLeaveStep:leaveAStepCallback,
                            onFinish:onFinishCallback
                            //enableFinishButton:true
                          });

                          $('.buttonNext').addClass('btn btn-success'); 
                        $('.buttonPrevious').addClass('btn btn-primary');
                        $('.buttonFinish').addClass('btn btn-default');

                          function leaveAStepCallback(obj){
                            var step_num= obj.attr('rel');


                            return validateSteps(step_num);
                          }
                          
                          function onFinishCallback(){
                           if(validateAllSteps()){
                            $('#form_commande').submit();

                           }
                          }
                                
                        });
                         
                        function validateAllSteps(){
                           var isStepValid = true;
                           
                           if(validateStep1() == false){
                             isStepValid = false;
                             $('#wizard').smartWizard('setError',{stepnum:1,iserror:true});         
                           }else{
                             $('#wizard').smartWizard('setError',{stepnum:1,iserror:false});
                           }
                           
                           if(validateStep3() == false){
                             isStepValid = false;
                             $('#wizard').smartWizard('setError',{stepnum:3,iserror:true});         
                           }else{
                             $('#wizard').smartWizard('setError',{stepnum:3,iserror:false});
                           }
                           
                           if(!isStepValid){
                              $('#wizard').smartWizard('showMessage','Please correct the errors in the steps and continue');
                           }
                                  
                           return isStepValid;
                        }   
                        
                        
                        function validateSteps(step){
                          var isStepValid = true;
                          // validate step 1
                          if(step == 1){
                            if(validateStep1() == false ){
                              isStepValid = false; 
                              $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
                              $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
                            }else{
                              $('#wizard').smartWizard('hideMessage');
                              $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
                            }
                          }
                          
                          // validate step3
                          if(step == 3){
                            last_step();
                            if(validateStep3() == false ){
                              isStepValid = false; 
                              $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
                              $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
                            }else{
                              $('#wizard').smartWizard('hideMessage');
                              $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
                            }
                          }
                          
                          return isStepValid;
                        }
                        
                        function validateStep1(){
                           var isValid = true; 
                           // Validate Username
                    /*       var un = $('#username').val();
                           if(!un && un.length <= 0){
                             isValid = false;
                             $('#msg_username').html('Please fill username').show();
                           }else{
                             $('#msg_username').html('').hide();
                           }
                           
                           // validate password
                           var pw = $('#password').val();
                           if(!pw && pw.length <= 0){
                             isValid = false;
                             $('#msg_password').html('Please fill password').show();         
                           }else{
                             $('#msg_password').html('').hide();
                           }
                           
                           // validate confirm password
                           var cpw = $('#cpassword').val();
                           if(!cpw && cpw.length <= 0){
                             isValid = false;
                             $('#msg_cpassword').html('Please fill confirm password').show();         
                           }else{
                             $('#msg_cpassword').html('').hide();
                           }  
                           
                           // validate password match
                           if(pw && pw.length > 0 && cpw && cpw.length > 0){
                             if(pw != cpw){
                               isValid = false;
                               $('#msg_cpassword').html('Password mismatch').show();            
                             }else{
                               $('#msg_cpassword').html('').hide();
                             }
                           }*/
                           return isValid;
                        }
                        
                        function validateStep3(){
                          var isValid = true;    
                          //validate email  email
                        /*  var email = $('#email').val();
                           if(email && email.length > 0){
                             if(!isValidEmailAddress(email)){
                               isValid = false;
                               $('#msg_email').html('Email is invalid').show();           
                             }else{
                              $('#msg_email').html('').hide();
                             }
                           }else{
                             isValid = false;
                             $('#msg_email').html('Please enter email').show();
                           }       */
                          return isValid;
                        }
                        
                        // Email Validation
                        function isValidEmailAddress(emailAddress) {
                          var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                          return pattern.test(emailAddress);
                        } 

                        function calculPrix(obj){
                          // recherche TD parente de l'input (obj) passé en paramètre
                          var oTD = obj.parentNode;
                          // recherche TR parente de la TD
                          var oTR = oTD.parentNode;
                          // récup de la position de la TD sur la ligne
                          var ind = oTD.cellIndex;
                          // récup. TD précédente
                          var oTDavant = oTR.cells[ind-1];
                          // récup. TD suivante
                          var oTDapres = oTR.cells[ind+1];
                          // récup de l'INPUT de la TD précédente
                          var oInput = oTD.getElementsByTagName('input')[1];
                          // récup. de l'INPUT de la TD suivante
                          //var oInputApres = oTDapres.firstChild;
                          // OUF!!! enfin le calcul
                         // console.log(oInputAvant.value+"--"+obj.value);
                          //oTDapres.innerHTML = oInputAvant.value * obj.value;

                          var bouton_coche = oTR.cells[0].firstChild;

                          var ancien = parseFloat(oInput.value);

                          if(bouton_coche.checked){
                              oTDapres.innerHTML = parseFloat(oTDavant.innerHTML) * obj.value;

                              

                              oInput.value = parseFloat(parseFloat(oTDavant.innerHTML) * obj.value);

                              var diff = parseFloat(oInput.value) - ancien;
                              
                              document.getElementById('total_com').innerHTML = parseFloat(parseFloat(document.getElementById('total_com').innerHTML) +parseFloat(diff));

                          }else{
                              
                              document.getElementById('total_com').innerHTML = parseFloat(parseFloat(document.getElementById('total_com').innerHTML) - ancien);
                              oInput.value = 0;
                              obj.value = 0;
                          }
                         
                        }

                        function majPrix(obj){
                            
                            var oTD = obj.parentNode;
                            // recherche TR parente de la TD
                            var oTR = oTD.parentNode;

                            var inputs = oTR.getElementsByTagName('input');

                            //var nb_input = 
                              for(var i = 0; i < inputs.length; i++) {
                                  if(inputs[i].type == 'number' && inputs[i].name == 'quantite[]'){
                                    
                                    if(inputs[i].value<1)
                                        inputs[i].value = 0;
                                    calculPrix(inputs[i]);


                                    break;

                                  }
                                }
                            //calculPrix(ob);
                        }

                        function change_coche(obj){
                            // recherche TD parente de l'input (obj) passé en paramètre
                            //var oTD = obj.parentNode;
                           // console.log(obj);
                        }

                        function tout_coche(obj){
                          
                             var inputs = document.getElementById('tbody_prod').getElementsByTagName('input');
                              for(var i = 0; i < inputs.length; i++) {
                                if(inputs[i].type == 'checkbox' && inputs[i].name == 'valeurs[]')
                                  inputs[i].checked = obj.checked;


                              }
                        }

                        function a_livrer(obj){
                            if(obj.checked){
                                document.getElementById('choix_livraison').hidden = false;
                                document.getElementById('livree').value = 1; //livraison
                                
                                document.getElementById("date_livraison").required = true;
                                document.getElementById("addresse_livraison").required = true;
                                document.getElementById("cout_livraison").required = true;
                            }else{
                                document.getElementById('choix_livraison').hidden = true;
                                document.getElementById('livree').value = -1; 

                                document.getElementById("date_livraison").required = false;
                                document.getElementById("addresse_livraison").required = false;
                                document.getElementById("cout_livraison").required = false;
                            }
                        }

                        function format_date(nb){
                          if(nb<10 && nb>=0)
                              return "0"+nb;
                            else
                              return nb;
                        }

                        function last_step(){
                          var div = document.getElementById("etape_validation");
                          var contenu = "";
                          var dd = new Date();
                          var date_commande = dd.getFullYear()+"-"+format_date(dd.getMonth()+1)+"-"+format_date(dd.getDate());
                          var heure_commande = format_date(dd.getHours())+":"+format_date(dd.getMinutes())+":"+format_date(dd.getSeconds());
                          

                          //information sur le client
                          contenu += "\
                          <input name='date_commande' type='date' name='date_commande' id='date_commande' hidden>\
                          <input name='heure_commande' type='time' name='heure_commande' id='heure_commande' hidden>\
                            <div class=\"form-group\">\
                              <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" > <center>Nom client:</center> </label>\
                              <div class=\"col-md-3 col-sm-6 col-xs-12\">\
                                  <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" > " + document.getElementById('nom').value +
                                  "</label>\
                              </div>\
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">\
                                  <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" >Fait à Dakar, </label>\
                              </div>\
                            </div>\
                            <div class=\"form-group\">\
                              <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" > <center>Prénom client:</center> </label>\
                              <div class=\"col-md-3 col-sm-3 col-xs-12\">\
                                  <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" >" + document.getElementById('prenom').value +
                                  "</label>\
                              </div>\
                              <div class=\"col-md-6 col-sm-6 col-xs-12\">\
                                  <label class=\"control-label col-md-3 col-sm-3 col-xs-12\" > le " + date_commande+ " à " + heure_commande +
                                  "</label>\
                            </div>\
                            <div class=\"form-group\">\
                              <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" > <center>Téléphone:</center> </label>\
                              <div class=\"col-md-3 col-sm-3 col-xs-12\">\
                                  <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" >" + document.getElementById('num_tel').value +
                                  "</label>\
                              </div>\
                            </div>\
                            <div class=\"form-group\">\
                              <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" > <center>Adresse:</center> </label>\
                              <div class=\"col-md-3 col-sm-3 col-xs-12\">\
                                  <label class=\"control-label col-md-2 col-sm-3 col-xs-12\" >" + document.getElementById('adresse').value +
                                  "</label>\
                              </div>\
                            </div>\
                          ";

                                                      //les produits commandés
                          contenu += "<div class='table-responsive'><table class=\"table table-striped  jambo_table bulk_action \">\
                                                      <thead>\
                                                        <tr class=\"headings\">\
                                                          <th class=\"column-title\">libelle</th>\
                                                          <th class=\"column-title\"> Categorie </th>\
                                                          <th class=\"column-title\"> Prix unitaire (FCFA) </th>\
                                                          <th class=\"column-title\"> Quantite </th>\
                                                          <th class=\"column-title\"> Prix total (FCFA) </th>\
                                                        </tr>\
                                                      </thead>\
                                            <tbody>\
                            "
                            var tab = document.getElementById('tbody_prod');
                            var tr = tab.getElementsByTagName("tr");
                            
                            for(var i=0; i<tr.length; i++){
                               
                                    in_put = tr[i].getElementsByClassName("valeurs_id")[0];

                                    
                                    if(in_put.checked && in_put.type == 'checkbox' && in_put.name == 'valeurs[]'){
                                       contenu += "<tr class='odd pointer'>";
                                       contenu += "<td>"+ tr[i].getElementsByClassName("valeurs_nom")[0].innerHTML +"</td>"
                                       contenu += "<td>"+ tr[i].getElementsByClassName("valeurs_cat")[0].innerHTML +"</td>"
                                       contenu += "<td>"+ tr[i].getElementsByClassName("valeurs_pu")[0].innerHTML +"</td>"
                                       contenu += "<td>"+ tr[i].getElementsByClassName("valeurs_qte")[0].value +"</td>"
                                       contenu += "<td>"+ tr[i].getElementsByClassName("valeurs_tot")[0].innerHTML +"</td>"
                                       contenu += "</tr>"
                                    }

                            }
                            contenu += "</tbody>\
                                                    </table>\
                                    </div>"


                            //signature

                            //generation de facture en pdf


                            div.innerHTML = contenu;
                            document.getElementById('date_commande').value = date_commande;
                            document.getElementById('heure_commande').value = heure_commande;
                        }
                     
                    </script>
                    <!-- /jQuery Smart Wizard -->
                 
                </body>
              </html>
  <?php
    }

    
  }
?>
