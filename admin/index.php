<?php 
  require_once('../class/ConnectDb.php'); 
  require_once('../class/DatabaseAuth.php'); 
  require_once('../class/Validator.php'); 
?>

<?php

if (!empty($_POST)){


  $db = new ConnectDb();

  $validator = new Validator($_POST);

  $validator->isEmail('email', 'Email invalide');

  $validator->passwordVerify($db, $_POST['password'], 'Admin', 'email', "Mot de passe incorrect");

  
  $errors = $validator->getErrors();

  // header('Location:../class/Validator.php');


  if(empty($errors)){

    header('Location: pages/Admin_dashboard.php');

  }

}
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Lock | Nalika - Material Admin Template</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  
  <link rel="stylesheet" href="style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

  <style>
    /* body{
      background-color: #230939 !important;
    } */
  </style>
</head>

<body>
 

  <div class="color-line"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="back-link back-backend">
          <a href="../index.php" class="btn btn-primary">Accueil</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="hpanel">
          <div class="panel-body text-center lock-inner">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <br />
            <h4><span class="text-success"><?php
                                            date_default_timezone_set('Africa/Porto-Novo');
                                            $date = date('h:i:s');
                                            echo $date;
                                            ?></span> <strong><?= date('D M Y'); ?></strong></h4>
            <p>Entrer vos credentiels admin pour vous connecter a votre tableau de bord.</p>
            <form action="" method="POST" class="m-t">
              <div class="form-group">
                <input type="email" required="" name="email" placeholder="Entrer votre email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" required="" name="password" placeholder="******" class="form-control">
              </div>
              <div class="text-danger">
                  <?php
                    if(!empty($_POST)){

                      if(!empty($errors)){

                          echo 'Email ou mot de passe incorrect';
                      }
                    }

                  ?>
                </div>
              <button class="btn btn-primary block full-width" type="submit">Connexion</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    <div class="row">
      <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center login-footer">
        <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
      </div>
    </div>
  </div>
  
</body>

</html>