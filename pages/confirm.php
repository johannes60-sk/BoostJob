<?php

      require_once('header.php');

      
     // echo "<h1>Pages de confirmation</h1>"
?>


     <!--  primary_header-->

  <div class="" id="header1" style="background-color: #230939 !important;">

    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" style="color: #fff !important;">
        LOGO
      </a>
      <div class="s010">
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
      </div>

      <div class="col-md-4 text-end">
        <!-- <a href="pages/inscription.php" class="btn btn-primary inscription_btn">Inscription</a> -->
        <a href="pages/connexion.php" class="btn btn-outline-primary me-2 connexion_btn " style="color: #fff !important;">Se connecter</a>
      </div>
    </header>
  </div>

  <!--  second_header-->

  <header class="p-3 mb-0 border-bottom" id="second_header" style="background-color: #230939 !important; ">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 link-secondary">Accueil</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Offre d'emploie</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Ils recrutent</a></li>
          <!-- <li><a href="#" class="nav-link px-2 link-dark">Products</a></li> -->
        </ul>
        <ul class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <li><a href="#" class="nav-link px-2 link-dark">Espace recruteur <i class="bi bi-arrow-right-short" style="color:  rgb(110, 70, 174) !important;"></i></a></li>
        </ul>
      </div>
    </div>
  </header>

  <div class="px-4 py-5 my-5 text-center">
    <!-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="display-5 fw-bold">Merci pour votre inscription !</h1>
    <div class="col-lg-6 mx-auto">
      <!-- <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> -->
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="pages/connexion.php" class="btn btn-outline-primary me-2 connexion_btn " style="color: black !important; border-color: black !important;">Se connecter</a>
        <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> -->
      </div>
    </div>
  </div>


  <?php require_once('footer.php') ?>