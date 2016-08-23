<?php
  session_start();

  if((isset($_POST['login']) && isset($_POST['password']) )){
    //authentifier la personne
    
    if(file_exists("../server/requete.php") && file_exists("../config/base_config.php")){
      include_once("../server/requete.php");
      include_once("../config/base_config.php");
     
      $base = new BaseDD();
      $a=$base->selectUser($_POST['login'], $_POST['password']);
      
      if($a[0] != Array()){
        $a = $a[0];
        //on créé la session
        $_SESSION['login'] = $a[1];
        $_SESSION['password'] = $a[2];
        $_SESSION['nom'] = $a[4];
        $_SESSION['prenom'] = $a[5];
        $_SESSION['email'] = $a[6];
        $_SESSION['photo'] = $a[7];
        
        header("Location: ./index.php");
      }else{
        header("Location: ./login.php");

      }
    }else
    header("Location: ./index.php");
  }else{ 
    session_destroy();
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
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="login.php">
              <h1>Connexion</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="login" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <!--a class="btn btn-default submit">Se connecter</a-->
                <button type="submit" class="btn btn-success">Se connecter</button>
                <a class="reset_pass" href="#">Mot de passe oublié?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Nouveau sur le site?
                  <a href="#signup" class="to_register"> Créer un compte </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gestion de vente de légumes.....</h1>
                  <p>©2016 All Rights Reserved. </p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Créer un compte</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.php">Valider</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Déjà membre ?
                  <a href="#signin" class="to_register"> Se connecter </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gestion de vente de légumes.....</h1>
                  <p>©2016 All Rights Reserved. </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
  }
?>