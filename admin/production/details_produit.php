<?php
  session_start();

  if(!(isset($_SESSION['login']) && isset($_SESSION['nom']) )){
    header("Location: ./login.php");
  }else{
        if( !(isset($_POST['libelle']) && isset($_POST['prix_unitaire']) && isset($_POST['categorie']) ) ){
            header("Location: ./index.php");
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

              <!-- Bootstrap -->
              <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
              <!-- Font Awesome -->
              <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
              <!-- iCheck -->
              <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

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
                          <h3>Details du produit</h3>
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
                              <h2><?php echo $_POST['libelle']; ?></h2>
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

                              <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="product-image">
                                  <img src=<?php if(isset($photo) && $photo!="") echo "'$photo'"; ?>  alt=<?php echo "\'" . $_POST['libelle'] . "\'"; ?>  />
                                </div>
                                

                              </div>

                              <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                                <h3 class="prod_title">Details</h3>

                                <p></p>
                                <br />

                                <div class="">
                                  <div class="product_price">
                                    <h1 class="price">Prix</h1>
                                    <span class="price-tax"><?php echo $_POST['prix_unitaire'] ; ?> FCFA</span>
                                    <br>
                                  </div>
                                </div>


                                <div class="product_social">
                                  <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-rss-square"></i></a>
                                    </li>
                                  </ul>
                                </div>

                              </div>

                              <br/>
                              <br/>

                              <div class="col-md-12">

                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Stock</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Categorie</a>
                                    </li>
                                  </ul>
                                  <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                      <p></p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                      <p><?php echo $_POST['categorie']; ?></p>
                                    </div>
                                
                                  </div>
                                </div>

                              </div>
                            </div>
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

              <!-- Custom Theme Scripts -->
              <script src="../build/js/custom.min.js"></script>
            </body>
          </html>
    <?php
      }
  }
?>
