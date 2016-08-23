<?php
  session_start();

  if(!(isset($_SESSION['login']) && isset($_SESSION['nom']) )){
    header("Location: ./login.php");
  }else{ 
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php

        include_once "./entete.php";
    ?>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
            <!-- sidebar menu -->
                  <?php
                      include_once "./menu.php";
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
                <h3>Gestion de vente de légumes <small>users</small></h3>
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


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des users </h2>
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
                    <p class="text-muted font-13 m-b-30">
                      La liste de tous les users...
                    </p>

                    <?php

                              if(file_exists("../server/requete.php") && file_exists("../config/base_config.php")){
                                  include_once("../server/requete.php");
                                  include_once("../config/base_config.php");

                                  $base = new BaseDD();
                                  $res = $base->selectAllUsers(PDO::FETCH_ASSOC);

                                 
                              }

                    ?>
                    <div <div class="col-md-9 col-sm-9 col-xs-12">
                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>N°</th>
                            <th>login</th>
                            <th>Nom</th>
                            <th>Mail</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php


                                  if(isset($res)){

                                        for($i=0; $i<count($res); $i++) {
                                          echo "<tr>";
                                            
                                              echo "<td>" . ($i+1) . "</td>";
                                              echo "<td>" . $res[$i]['login'] . "</td>";
                                              echo "<td>" . strtoupper($res[$i]['nom']) . " " . $res[$i]['prenom'] . "</td>";
                                              echo "<td>" . $res[$i]['email'] . "</td>";
                                              echo "<td><input type='radio' onchange='give_value(this)' name='coches[]' value=" . $res[$i]['id_utilisateur'] . "></td>";
                                            
                                          echo "</tr>";
                                        }
                                  }
                            ?>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class='form-group' style='height:30px;'>
                          <div style='display:inline-block; height:30px;'>
                              <form action='modif_user.php' method='post'>
                                  <input type='text' id='id_user_1' name='id_user' hidden/>
                                  <button style='width:90px; height:30px;' type='submit' class='btn btn-success'>Modifier</button>
                              </form>
                          </div>
                          <div style='display:inline-block;height:30px;'>
                            <form action='del_user.php' method='post'>
                                <input type='text' id='id_user_2' name='id_user' hidden/>
                                <button type='submit' style='width:90px; height:30px;' class='btn btn-success'>Supprimer</button>
                            </form>
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
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({
          dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
        });

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });


      function give_value(obj){
          if(obj.checked){
              
              document.getElementById("id_user_1").value = obj.value;
              document.getElementById("id_user_2").value = obj.value;
          }
      }
    </script>
    <!-- /Datatables -->
  </body>
</html>
<?php
  }
?>