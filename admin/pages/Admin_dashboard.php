<?php
require_once('../../class/ConnectDb.php');
require_once('../../class/DatabaseAuth.php');
require_once('../../class/Validator.php');
require_once('../../class/AddJobs.php');
?>

<?php


if (!empty($_POST)) {

  $validator = new Validator($_POST);

  // $validator->isAlphanumerique('job_name', "Ne doit pas contenir de chiffre");

  $validator->regularExpressions('localisation', '/^[a-zA-Z]$/', "Lieu invalide");

  $validator->isEmail('email_candidature', "Email invalide");

  $errors = $validator->getErrors();

    $db = new ConnectDb();

    $addjob = new AddJobs($db, $_POST);

    if($validator->isValid()){

      $addjob->addJob();

      header('Location: ../../index.php?action=post_new_job');
    }

}

?>

<?php require_once('header.php'); ?>

<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>BJOOBLE</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
          <div class="profile_pic">
            <img src="../img/img.jpg" alt="..." class="img-circle profile_img">
          </div>
          <div class="profile_info">
            <span>Bienvenu,</span>
            <h2>Johannes</h2>
          </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
          <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">
              <li><a><i class="fa fa-archive "></i>Offre d'emploie <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="#">Toute les offres d'emploies</a></li>
                  <li><a href="#">Ajouter</a></li>
                  <li><a href="#">Modifier</a></li>
                  <li><a href="#">Supprimer</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-edit"></i>Gerer les candidatures</a></li>

            </ul>
          </div>
          <div class="menu_section">
            <h3>Live On</h3>
            <ul class="nav side-menu">
              <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="e_commerce.html">E-commerce</a></li>
                  <li><a href="projects.html">Projects</a></li>
                  <li><a href="project_detail.html">Project Detail</a></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="profile.html">Profile</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="page_403.html">403 Error</a></li>
                  <li><a href="page_404.html">404 Error</a></li>
                  <li><a href="page_500.html">500 Error</a></li>
                  <li><a href="plain_page.html">Plain Page</a></li>
                  <li><a href="login.html">Login Page</a></li>
                  <li><a href="pricing_tables.html">Pricing Tables</a></li>
                </ul>
              </li>
              <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="#level1_1">Level One</a>
                  <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu"><a href="level2.html">Level Two</a>
                      </li>
                      <li><a href="#level2_1">Level Two</a>
                      </li>
                      <li><a href="#level2_2">Level Two</a>
                      </li>
                    </ul>
                  </li>
                  <li><a href="#level1_2">Level One</a>
                  </li>
                </ul>
              </li>
              <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
            </ul>
          </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
          <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
          </a>
          <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
          </a>
        </div>
        <!-- /menu footer buttons -->
      </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
      <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
          <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
              <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                <img src="../img/img.jpg" alt="">Johannes
              </a>
              <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="javascript:;"> Profile</a>
                <a class="dropdown-item" href="javascript:;">
                  <span class="badge bg-red pull-right">50%</span>
                  <span>Settings</span>
                </a>
                <a class="dropdown-item" href="javascript:;">Help</a>
                <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
              </div>
            </li>

            <li role="presentation" class="nav-item dropdown open">
              <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-green">6</span>
              </a>
              <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="dropdown-item">
                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                    <span>
                      <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                    </span>
                    <span class="message">
                      Film festivals used to be do-or-die moments for movie makers. They were where...
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <div class="text-center">
                    <a class="dropdown-item">
                      <strong>See All Alerts</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">
      <!-- top tiles -->
      <div class="row" style="display: inline-block;">
        <div class="tile_count">
          <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
            <div class="count">2500</div>
            <span class="count_bottom"><i class="green">4% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
            <div class="count">123.50</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
            <div class="count green">2,500</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
            <div class="count">4,567</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
          <div class="col-md-2 col-sm-4  tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
            <div class="count">7,325</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
          </div>
        </div>
      </div>
      <!-- /top tiles -->

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <section class=" cadre_scroll">
            <form action="" method="POST" enctype="multipart/form-data">

              <div class="checkout_container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 order_address">
                    <div id="billing_shipping_column">
                  
                        <div id="billing_new_adress-form">
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-full form-group">
                              <label for="job_name" class="required">
                                Nom de l’offre d’emploi
                              </label>
                              <input type="text" id="job_name" value="<?= $job_name = (!empty($_POST))? $_POST['job_name'] : ' '; ?>" name="job_name" maxlength="255" class="form-control input-text" required>
                              <span class="text-danger">
                                <?php 
                                  if(isset($errors['job_name'])){
                                    echo $errors['job_name'];
                                  }
                                ?>
                              </span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-full form-group">
                              <label for="localisation">
                                Localisation (optionnel)
                              </label>
                              <input type="text" id="localisation"  value="<?= $localisation = (!empty($_POST))? $_POST['localisation'] : ' '; ?>" name="localisation" maxlength="255" class="form-control input-text " placeholder="Par exemple Cotonou [Laissez vide si l’offre peut être pourvue depuis n’importe où (ex : télétravail)]" style="margin-bottom: 6px;">
                              <span class="text-danger">
                                <?php 
                                  if(isset($errors['localisation'])){
                                    echo $errors['localisation'];
                                  }
                                ?>
                              </span>
                            </div>
                            
                            <div class="form-group col-md-6 col-sm-6 col-xs-6 col-xxs-full">
                              <label for="job_type" class="required">Type d’offre d’emploi</label>
                              <select class="form-control" id="job_type" name="job_type" required>
                                <option value=""></option>
                                <option value="Freelance">Freelance</option>
                                <option value="Fulltime">Fulltime</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Temporaty">Temporaty</option>
                              </select>
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-6 col-xxs-full">
                              <label for="job_categorie" class="required">Catégorie d’offre d’emploi</label>
                              <select class="form-control" id="job_categorie" name="job_categorie" required>
                                <option value=""></option>
                                <option value="Freelance">Informatque, nouvelles technologies</option>
                                <option value="Fulltime">Backend</option>
                                <option value="Part Time">Devops</option>
                                <option value="Temporaty">Commerce</option>
                              </select>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 col-xxs-full form-group">
                              <label for="job_description" class="required">
                                Description
                              </label>
                              <textarea class="form-control" placeholder="Description du post" id="job_description" value="<?= $job_description = (!empty($_POST))? $_POST['job_description'] : ' '; ?>"  name="job_description" style="height: 100px; background-color: #F7F7F7 !important;"></textarea>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-full form-group">
                              <label for="email_candidature" class="required">
                                Email de candidature
                              </label>
                              <input type="text" id="email_candidature" value="<?= $email_candidature = (!empty($_POST))? $_POST['email_candidature'] : ' '; ?>"  name="email_candidature" maxlength="255" class="form-control input-text" required>
                              <span class="text-danger">
                                <?php 
                                  if(isset($errors['email_candidature'])){
                                    echo $errors['email_candidature'];
                                  }
                                ?>
                              </span>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-full form-group">
                              <label for="salary" >
                                Salaire(optionnel)
                              </label>
                              <input type="text" id="salary" value="<?= $salary = (!empty($_POST))? $_POST['salary'] : ' '; ?>" name="salary" maxlength="255" class="form-control input-text">
                            </div>

                            <div class="title col-md-12 col-sm-12 col-xs-12 col-xxs-full mt-4">
                              <h3>Détails de la société</h3>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-full form-group">
                              <label for="entreprise_name" class="required">
                                Nom de l’entreprise
                              </label>
                              <input type="text" id="entreprise_name"  value="<?= $entreprise_name = (!empty($_POST))? $_POST['entreprise_name'] : ' '; ?>" name="entreprise_name" maxlength="255" class="form-control input-text" required>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-full form-group">
                              <label for="url_site_entreprise">
                                Site (optionnel)
                              </label>
                              <input type="text" id="url_site_entreprise"  value="<?= $url_site_entreprise = (!empty($_POST))? $_POST['url_site_entreprise'] : ' '; ?>" name="url_site_entreprise" maxlength="255" class="form-control input-text">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-full form-group">
                              <label for="slogan">
                                Slogan (optionnel)
                              </label>
                              <input type="text" id="slogan"  value="<?= $slogan = (!empty($_POST))? $_POST['slogan'] : ' '; ?>" name="slogan" maxlength="255" class="form-control input-text">
                            </div>
                            <div class="input-group col-md-6 col-sm-6 col-xs-6 col-xxs-full" style="margin-top: 33px !important;">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo" name="logo">
                                <label class="custom-file-label " for="logo">Logo</label>
                              </div>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 order-method">
                      <hr>
                      <div id="checkout_review">
                        <div class="review_title">
                          <h3>Récapitulatif </h3>
                        </div>
                        <table class="table table-bordered ">
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col">Nom de l’offre d’emploi</th>
                              <th scope="col">Localisation (optionnel)</th>
                              <th scope="col">Type d’offre d’emploi</th>
                              <th scope="col">Catégorie d’offre d’emploi</th>
                              <th scope="col">Email/URL de candidature</th>
                              <th scope="col">Salaire(optionnel)</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row" rowspan="3" style="width: 20%; vertical-align: middle;">Détails offre d'emploie</th>
                              <td class="text-muted" id="job_name_recap"></td>
                              <td class="text-muted" id="localisation_recap"></td>
                              <td class="text-muted" id="job_type_recap"></td>
                              <td class="text-muted" id="job_categorie_recap"></td>
                              <td class="text-muted" id="email_candidature_recap"></td>
                              <td class="text-muted" id="salary_recap"></td>
                            </tr>

                          </tbody>
                        </table>

                        <!-- Detail entreprise -->

                        <table class="table table-bordered ">
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col">Nom de l'entreprise</th>
                              <th scope="col">Site officiel</th>
                              <th scope="col">Slogan</th>
                              <th scope="col">Logo</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row" rowspan="3" style="width: 20%; vertical-align: middle;">Détails société</th>
                              <td class="text-muted" id="entreprise_name_recap"></td>
                              <td class="text-muted" id="url_site_entreprise_recap"></td>
                              <td class="text-muted" id="slogan_recap"></td>
                              <td class="text-muted">URL Logo</td>
                            </tr>

                          </tbody>
                        </table>
                      </div>

                      <div id="checkout_shipping">
                        <div id="shipping_same_as_billing">
                          <label for="shipping_same_as_billing">
                            <input type="checkbox" id="shipping_same_as_billing" checked="checked">
                            J’accepte les Conditions générales d’utilisation.
                          </label>
                        </div>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-lg btn-primary button_add_job pull_right text_uppercase">
                          <span>Ajouter</span>
                        </button>
                      </div>
                    </div>
                  </div>

                </div>
            </form>

          </section>

          <!-- Ajouter une offre d'emploie-->



          <!--FIN Ajouter une offre d'emploie-->


          <!-- /page content -->

          <!-- footer content -->
          <!-- <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
          <!-- /footer content -->
        </div>
      </div>

      <!--Autocompletation recapitulatif -->
      <script src="../js/jquerry.js"></script>

      <script>
        $(document).ready(function() {

          $('#job_name').keyup(function() {

            $('#job_name_recap').text($('#job_name').val())
          });

          $('#localisation').keyup(function() {

            $('#localisation_recap').text($('#localisation').val())
          });

          $('#job_type').click(function() {

            $('#job_type_recap').text($('#job_type').val())

          });

          $('#job_categorie').click(function(){

            $('#job_categorie_recap').text($('#job_categorie').val())

          });

          $('#email_candidature').keyup(function() {

            $('#email_candidature_recap').text($('#email_candidature').val())
          });

          $('#salary').keyup(function() {

            $('#salary_recap').text($('#salary').val())
          });

          $('#entreprise_name').keyup(function() {

            $('#entreprise_name_recap').text($('#entreprise_name').val())
          });

          $('#url_site_entreprise').keyup(function() {

            $('#url_site_entreprise_recap').text($('#url_site_entreprise').val())
          });

          $('#slogan').keyup(function() {

            $('#slogan_recap').text($('#slogan').val())
          });
        })
      </script>

      <!-- jQuery -->
      <script src="../vendor/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap -->
      <script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

      <!-- bootstrap-progressbar -->
      <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

      <!-- Custom Theme Scripts -->
      <script src="../build/js/custom.min.js"></script>

      <!--Font awesome-->
      <script src="https://kit.fontawesome.com/aabef8c593.js" crossorigin="anonymous"></script>

      <!-- Bootstrap JS
		============================================ -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->


      <?php require_once('footer.php'); ?>