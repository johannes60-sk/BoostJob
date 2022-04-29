<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="css/search.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<body>

    <div id="main">

        <!--  primary_header-->

        <div class="" id="header1">

            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-2">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    LOGO
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

                </ul>

                <div class="col-md-4 text-end">
                    <a href="pages/inscription.php" class="btn btn-primary inscription_btn">Inscription</a>
                    <a href="pages/connexion.php" class="btn btn-outline-primary me-2 connexion_btn ">Se connecter</a>
                </div>
            </header>
        </div>

        <!--  second_header-->

        <header class="p-3 mb-0 border-bottom" id="second_header">
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
                        <li><a href="#" class="nav-link px-2 link-dark">Publier</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">A propos</a></li>
                        <!-- <li><a href="#" class="nav-link px-2 link-dark">Products</a></li> -->
                    </ul>
                    <ul class="nav col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <li><a href="Espace_recruteur" class="nav-link px-2 link-dark">Espace recruteur <i class="bi bi-arrow-right-short" style="color:  rgb(110, 70, 174) !important;"></i></a></li>
                    </ul>
                </div>
            </div>
        </header>


        <!--  Hero-->

        <div class="px-4 py-5 my-0 text-start" id="hero">
            <h1 class="display-5 fw-bold offset-md-1"><span style="color: #C1BAEB;">Trouvez le job qui vous convient</span> vraiment.</h1>
            <div class="col-lg-12 mx-auto" id="search">
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
                            <div class="advance-search">
                                <span class="desc">ADVANCED SEARCH</span>
                                <div class="row">
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="Categories"></option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="Localisation"></option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="Ville"></option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row second">
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="Entreprise"></option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Time</option>
                                                <option>Last time</option>
                                                <option>Today</option>
                                                <option>This week</option>
                                                <option>This month</option>
                                                <option>This year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Type</option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row third">
                                    <div class="input-field">
                                        <div class="result-count">
                                            <span>108 </span>results
                                        </div>
                                        <div class="group-btn">
                                            <button class="btn-delete" id="delete">RESET</button>
                                            <button class="btn-search">SEARCH</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Post job section-->

        <section id="section_job">
            <h2 class="text-center fw-bold title p-3">Publication d'emploie</h2>
            <div class="row align-items-md-stretch mt-5 container-fluid" id="post_job" style="width: 95%; margin-left: 2.5%">

                <?php

                if (isset($_GET['action']) AND $_GET['action'] == 'post_new_job'){ //admin/pages/Admin_dashboard.php

                        require_once('class/ConnectDb.php');

                        $db = new ConnectDb();

                        $jobs = $db->query("SELECT * FROM jobs ");

                        // $jobs_id = $db->lastInsertId();

                        while ($job = $jobs->fetch()){
                ?>
                            <div class="col-md-6 mb-4" id="new_job">
                                <div class="h-100 p-5 bg-light border rounded-3" style="position: relative !important;">
                                    <div class="row">
                                        <div class="col-md-2">LOGO</div>
                                        <div class="col-md-10">
                                            <a href="pages/view_job_post.php?job_id=<?= $job['id'] ?>" class="job_title">
                                                <h2><?= $job['nom'] ?></h2>
                                            </a>
                                            <p class="text-muted"><?= $job['nom_entreprise'] ?></p>
                                            <div class="border_bottom"></div>
                                            <div class="salary">
                                                <i class="bi bi-cash-coin fs-5 p-2"></i>
                                                <span class="fs-5 salary"><?= $job['salaire'] ?></span>
                                            </div>
                                            <div class="compagny_adresse">
                                                <i class="bi bi-geo-alt fs-5 p-2"></i>
                                                <span class="fs-5"><?= $job['localisation'] ?></span>
                                            </div>
                                            <li class="job-type part-time"><?= $job['type'] ?></li>
                                            <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
                                            <div class="featured-label">
                                                A la une
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                    <?php

                    }
                } else {

                    require_once('class/ConnectDb.php');

                    $db = new ConnectDb();

                    $jobs = $db->query("SELECT * FROM jobs ");

                    while ($job = $jobs->fetch()) {
                    ?>
                        <div class="col-md-6 mb-4" id="new_job">
                            <div class="h-100 p-5 bg-light border rounded-3" style="position: relative !important;">
                                <div class="row">
                                    <div class="col-md-2">LOGO</div>
                                    <div class="col-md-10">
                                        <a href="pages/view_job_post.php?job_id=<?= $job['id'] ?>" class="job_title">
                                            <h2><?= $job['nom'] ?></h2>
                                        </a>
                                        <p class="text-muted"><?= $job['nom_entreprise'] ?></p>
                                        <div class="border_bottom"></div>
                                        <div class="salary">
                                            <i class="bi bi-cash-coin fs-5 p-2"></i>
                                            <span class="fs-5 salary"><?= $job['salaire'] ?></span>
                                        </div>
                                        <div class="compagny_adresse">
                                            <i class="bi bi-geo-alt fs-5 p-2"></i>
                                            <span class="fs-5"><?= $job['localisation'] ?></span>
                                        </div>
                                        <li class="job-type part-time"><?= $job['type'] ?></li>
                                        <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
                                        <div class="featured-label">
                                            A la une
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php

                    }
                    ?>
                <?php
                }
                ?>

            </div>
        </section>

        <!-- Section call to action-->

        <div class="bg_call_to_action_section text-secondary px-4 py-5 text-center">
            <div class="py-5">
                <h1 class="display-5 fw-bold text-white">Votre nouvel emploi, offres disponibles dans tout le Benin</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4 text-white">Nous vous aiderons à le trouver. Nous sommes votre première étape pour trouver vos futurs emploie</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Se connecter</button>
                        <button type="button" class="btn btn-outline-light btn-lg px-4">S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>


        <?php require_once('pages/footer.php'); ?>

    </div>

</body>

</html>