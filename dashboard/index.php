<!-- <?php

        require_once('../class/ConnectDb.php');

        $db = new ConnectDb();

        if (!empty($_GET['id'])) {
            $job = [
                'id' => intval($_GET['id']),
            ];

            $req_delete = $db->query('DELETE FROM candidature WHERE id=:id', $job);

            echo "<div class='alert alert-success'>Suppression réussie!</div>";
        }

        ?>
 -->





<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Nalika - Material Admin Template</title>
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css"> -->
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="css/normalize.css"> -->
    <!-- meanmenu icon CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="css/meanmenu.min.css"> -->
    <!-- main CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="css/main.css"> -->
    <!-- morrisjs CSS
		============================================ -->
    <!-- <link rel="stylesheet" href="css/morrisjs/morris.css"> -->
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
    
		============================================ -->
    <!-- <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css"> -->
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <!--Bootstrap
        =============================================-->
    <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> -->

    <style>
        .b-logo {
            font-size: 20px;
            margin-right: 45px;

        }

        .alert-title h2,
        .alert-title p {

            letter-spacing: 1px;
            font-weight: 500;
            font-size: 15px;

        }

        .job_name {
            font-size: 20px !important;
        }

        .alert-title p {
            color: #a78e8e;
            font-weight: 900 !important;
        }

        .see_more_btn {

            /* background-color: #a78e8e !important; */
            border-color: #a78e8e !important;
            font-weight: bold;
            background-color: transparent;
            position: absolute;
            top: 115px;
            right: 126px;
        }

        .delete_btn {
            border-color: #a78e8e !important;
            font-weight: bold;
            background-color: transparent;
            position: absolute;
            top: 115px;
            right: 23px;
        }

        .title {
            color: white;
            text-align: center;
            margin-bottom: 32px;
        }
    </style>
</head>

<body>

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <!-- <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a> -->
                <a href="index.php"><img class="main-logo" src="img/b-logo2.PNG" alt="" /></a><span class="b-logo p-4">BJOOBLE</span>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="#"><img src="img/notification/4.jpg" alt="" /></a>
                    <h2>Pseudo <span class="min-dtn">Admin</span></h2>
                </div>
                <div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="" href="?page=Candidate">
                                <i class="bi bi-archive icon icon-wrap "></i>
                                <span class="mini-click-non">Candidatures</span>
                            </a>
                        </li>

                        <li><a class="" href="?page=Abonnement" aria-expanded="false"><i class="bi bi-hand-thumbs-up icon icon-wrap"></i><span class="mini-click-non">Abonnement</span></a></li>
                        <li><a class="" href="?page=Recruter" aria-expanded="false"><i class="bi bi-megaphone icon icon-wrap"></i><span class="mini-click-non">Recruter</span></a></li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Offre d'emploie</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Ils recrutent</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">A propos</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-envelope-o adminpro-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/3.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/2.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud adminpro-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser adminpro-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart adminpro-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name">Admin name</span>
                                                        <!-- <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i> -->
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn ">
                                                        <!-- <li><a href="register.html"><span class="fa fa-home author-log-ic"></span>Register</a> -->
                                                </li>
                                                <li><a href="#"><span class="fa fa-user author-log-ic"></span>Mon Profile</a>
                                                </li>
                                                <!-- <li><a href="lock.html"><span class="fa fa-diamond author-log-ic"></span> Lock</a> -->
                                                </li>
                                                <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Parametre</a>
                                                </li>
                                                <li><a href="login.html"><span class="fa fa-lock author-log-ic"></span>Deconnexion</a>
                                                </li>
                                            </ul>
                                            </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seacr bar -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Line Charts</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Charts Start-->



        <?php
        // var_dump( $_SERVER['PHP_SELF']); die();
        if (isset($_GET['page'])) {

            switch ($_GET['page']) {

                case 'Candidate':

        ?>
                    <div class="charts-area mg-tb-15">
                        <div class="container-fluid">
                            <h2 class="title">Suivi de mes candidatures</h2>

                            <div class="row">
                                <?php

                                require_once('../class/ConnectDb.php');

                                $db = new ConnectDb();

                                $job = $db->query("SELECT * FROM candidature");

                                while ($job_candidate = $job->fetch()) {


                                ?>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 20px; position: relative;">
                                        <div class="charts-single-pro responsive-mg-b-30 " id="block_job">
                                            <div class="alert-title ">
                                                <h2 class="job_name"><?= $job_candidate['nom'] ?></h2>
                                                <h2 class="text-white"><?= $job_candidate['nom_entreprise'] ?></h2>
                                                <p class="text-muted text-white" style="font-size: 15px; margin-bottom: 9px;"> <i class="bi bi-geo-alt fs-5 p-2"></i><?= $job_candidate['localisation'] ?></p>
                                                <p class="text-muted text-white" style="font-size: 15px; margin-bottom: 0;"><i class="bi bi-cash-coin fs-5 p-2"></i><?= $job_candidate['salaire'] ?></p>
                                            </div>

                                            <a href="../pages/view_job_post.php?job_id=<?= $job_candidate['id_candidature'] ?>" class="btn btn-primary me-2 see_more_btn offset-md-6">Plus</a>
                                            <a href="#" class="btn btn-primary me-2 delete_btn offset-md-6" id="delete_btn">Supprimer</a>

                                            <?php

                                            ?>

                                            <?php

                                            ?>

                                            <!-- <div id="basic-chart">
                                            <canvas id="basiclinechart"></canvas>
                                        </div> -->
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>

                                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="charts-single-pro">
                                        <div class="alert-title">
                                            <h2>Line Chart Multi Axis</h2>
                                            <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                                        </div>
                                        <div id="axis-chart">
                                            <canvas id="linechartmultiaxis"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="charts-single-pro mg-tb-30">
                                        <div class="alert-title">
                                            <h2>Line Chart Stepped</h2>
                                            <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                                        </div>
                                        <div id="stepped-chart">
                                            <canvas id="linechartstepped"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="charts-single-pro mg-tb-30">
                                        <div class="alert-title">
                                            <h2>Line Chart Interpolation</h2>
                                            <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                                        </div>
                                        <div id="polation-chart">
                                            <canvas id="linechartinterpolation"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="charts-single-pro responsive-mg-b-30">
                                        <div class="alert-title">
                                            <h2>Chart Line styles</h2>
                                            <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                                        </div>
                                        <div id="styles-chart">
                                            <canvas id="linechartstyles"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="charts-single-pro">
                                        <div class="alert-title">
                                            <h2>Chart Line point circle</h2>
                                            <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                                        </div>
                                        <div id="circle-chart">
                                            <canvas id="linechartpointcircle"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="charts-single-pro mg-t-30">
                                        <div class="alert-title">
                                            <h2>Chart Line Point rectRot</h2>
                                            <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                                        </div>
                                        <div id="rectRot-chart">
                                            <canvas id="linechartpointrectRot"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="charts-single-pro mg-t-30">
                                        <div class="alert-title">
                                            <h2>Chart Line point cross</h2>
                                            <p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
                                        </div>
                                        <div id="cross-chart">
                                            <canvas id="linechartpointcross"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            </div>
                        </div>
                    <?php
                    break;

                case 'Abonnement':

                    ?>
                        <h1 class="text-center" style="color:#fff;">Page Abonnement</h1>
                    <?php
                    break;
                case 'Recruter':

                    ?>
                        <h1 class="text-center" style="color:#fff;">Page Recruteur</h1>
                <?php
            }
                ?>

            <?php

        } else {

            ?>
                <h2 class="text-center" style="color: #fff ;">Bienvenu sur votre Dashboard</h2>
            <?php

        }

            ?>

            <script src="../js/jquerry.js"></script>

            <script>
                $('#delete_btn').click(function(e) {
                    e.preventDefault();

                    let tempSup = confirm('Voulez-vous vraiment supprimé cette tâche ? ');

                    if (tempSup) {
                        location.href = this.href
                    }
                })
            </script>

            <!-- Charts End-->
            <!-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
                    </div>
                    <!-- jquery
		============================================ -->
                    <script src="js/vendor/jquery-1.12.4.min.js"></script>
                    <script src="../js/jquerry.js"></script>
                    <!-- bootstrap JS
		============================================ -->
                    <script src="js/bootstrap.min.js"></script>
                    <!-- wow JS
		============================================ -->
                    <!-- <script src="js/wow.min.js"></script> -->
                    <!-- price-slider JS
		============================================ -->
                    <!-- <script src="js/jquery-price-slider.js"></script> -->
                    <!-- meanmenu JS
		============================================ -->
                    <script src="js/jquery.meanmenu.js"></script>
                    <!-- owl.carousel JS
		============================================ -->
                    <!-- <script src="js/owl.carousel.min.js"></script> -->
                    <!-- sticky JS
		============================================ -->
                    <script src="js/jquery.sticky.js"></script>
                    <!-- scrollUp JS
		============================================ -->
                    <!-- <script src="js/jquery.scrollUp.min.js"></script> -->
                    <!-- mCustomScrollbar JS
		============================================ -->
                    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
                    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
                    <!-- metisMenu JS
		============================================ -->
                    <script src="js/metisMenu/metisMenu.min.js"></script>
                    <script src="js/metisMenu/metisMenu-active.js"></script>
                    <!-- sparkline JS
		============================================ -->
                    <!-- <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script> -->
                    <!-- calendar JS
		============================================ -->
                    <!-- <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script> -->
                    <!-- float JS
		============================================ -->
                    <!-- <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script> -->
                    <!-- plugins JS
		============================================ -->
                    <!-- <script src="js/plugins.js"></script> -->
                    <!-- main JS
		============================================ -->
                    <script src="js/main.js"></script>
                    <!-- Bootstrap JS
		============================================ -->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>