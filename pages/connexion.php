<?php
require_once('../class/ConnectDb.php');
require_once('../class/Validator.php');
require_once('../class/DatabaseAuth.php');

if (!empty($_POST)) {

  $db = new ConnectDb();

  $DatabaseAuth = new DatabaseAuth($db);

  $DatabaseAuth->login($_POST['pseudo'], 'users');

  if($DatabaseAuth){

    header('Location: ../dashboard/index.php');

  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/inscription_and_connexion.css">
  <link href="../css/search.css" rel="stylesheet" />
  <title>Inscription</title>
</head>

<body>
 
<?php require_once('header.php'); ?>


  <img src="../img/header.PNG" width="100%" alt="" style="margin-bottom: 200px; margin-top:-1px">

  <div class="card  col-md-6 offset-md-3">
    <div class="card-body">
      <form action="" method="post">
        <div class=" col-md-8 offset-md-2">
          <a href="" class="offset-md-4 Auth_form_link">Vous n’avez pas encore de compte ? Inscription</a>
          <h1 class="mt-1 title_form">Connexion !</h1>
          <div class="mb-4" style="color: #424242 !important;">Sélectionnez votre mode de connexion préféré.</div>
          <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-start">Nom et Prenom</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div> -->
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-start">Pseudo ou Email</label>
            <input type="text" name="pseudo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <!-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-start">Address email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div> -->
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

</body>

</html>


<!-- <div class="s010">
        <form id="search_form">
          <div class="inner-form">
            <div class="basic-search">
              <div class="input-field">
                <input id="search" type="text" placeholder="Rechercher emploie, mots clés, entreprises" />
                <div class="icon-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div> -->