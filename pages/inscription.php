<?php
  require_once('../class/ConnectDb.php');
  require_once('../class/Validator.php');
  require_once('../class/DatabaseAuth.php');

  $validator = new Validator($_POST);

  if(!empty($_POST)){

    $db = new ConnectDb();


    $validator->isAlphanumerique("pseudo", "Votre pseudo n'est pas au format alphanumerique");

    $validator->isUniq('pseudo', $db, 'users',  "Ce pseudo est deja pris");

    $validator->isUniq('email', $db, 'users', "Cet email est deja utilise");

    $validator->isEmail('email', 'Votre email n\'est pas valide');

    if($validator->isValid()){

      $user = new DatabaseAuth($db);

      $user->register($_POST['pseudo'], $_POST['email'], $_POST['password'], 'users');
    }

  }

  $errors = $validator->getErrors();

?>

<?php require_once('header.php'); ?>


  <img src="../img/header.PNG" width="100%" alt="" style="margin-bottom: 200px; margin-top:-1px">

  <div class="card  col-md-6 offset-md-3">
    <div class="card-body">
      <form action="" method="post">
        <div class=" col-md-8 offset-md-2">
          <a href="" class="offset-md-4 Auth_form_link">Vous avez déjà un compte ? Connexion</a>
          <h1 class="mt-1 title_form">Vous n’avez pas de compte ?</h1>
          <div class="mb-4" style="color: #424242 !important;">Sélectionnez votre mode de connexion préféré.</div>
          <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-start">Nom et Prenom</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div> -->
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-start">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <span class="text-danger">

              <?php 
              
                if(!empty($_POST)){

                  if(!empty($errors)){

                    echo $errors['pseudo'];
                  }
                }
                
              ?>
            
            </span>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-start">Address email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <span class="text-danger">

                <?php

                  if(!empty($_POST)){

                    if(!empty($errors)){
                      echo $errors['email'];
                    }
                  }

                ?>

            </span>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Créer un mot de passe</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="pb-3 text-end forgette_password"><a href="">Mot de passe oublié ?</a></div>
          <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
          <div class="Auth_form_button_email">
            <button type="submit" class="btn btn-primary ">Poursuivre avec l’adresse e-mail</button>
          </div>
          <div class="text-center mt-2 mb-3" style="color: #757575; font: weight 60px;">
            <span>OU</span>
          </div>
          <div class="Auth_form_button_facebook mb-3">
            <button type="submit" class="btn btn-primary "><i class="Auth_form_icone_facebook bi bi-facebook"></i>Poursuivre avec Facebook</button>
          </div>
          <div class="Auth_form_button_google  mb-5">
            <button type="submit" class="btn btn-primary "><img src="../img/google_icon-icons.com_62736.ico" class="Auth_form_icone_google" alt="">Poursuivre avec Google</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php require_once('footer.php'); ?>

