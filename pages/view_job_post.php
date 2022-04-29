<?php 
require_once('header.php'); 
require_once('../class/ConnectDb.php');
require_once('../class/DatabaseAuth.php');
?>

<?php 
    if(isset($_GET)){
        if(!empty($_GET['job_id'])){

            $id = $_GET['job_id'];

            $db = new ConnectDb();

            $job = $db->query("SELECT * FROM jobs WHERE id = :id", ['id' => $id])->fetch();

        }else header("Location: ../index.php");
    }else header("Location: ../index.php");

?>


<div class=" pt-4 pb-4 text-center text-white" style="background-color: #230939 !important;">
    <h1 class="display-5 fw-bold"><?= $job['nom'] ?></h1>
    <div class="col-lg-6 mx-auto">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="postule.php?job_name=<?=$job['nom']?>&id=<?=$id ?>" class="btn btn-outline-primary me-2 connexion_btn text-white postuler_btn">Postuler</a>
        </div>
    </div>
    <div class="container pt-4" style="margin-bottom: -21px;">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12  fs-5 text-start">Publiée le 25.04.2022</div>
            <div class="col-md-5 col-sm-5 col-xs-12 text-end fs-5">Partagez cette annonce</div>
            <div class="col-md-1 col-sm-1 col-xs-12 p-0">
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-xs-12 "><i class="bi bi-facebook fs-4"></i></div>&nbsp;
                    <div class="col-md-1 col-sm-1 col-xs-12"><i class="bi bi-twitter fs-4"></i></div>&nbsp;
                    <div class="col-md-1 col-sm-1 col-xs-12"><i class="bi bi-linkedin fs-4"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Detail Entreprise-->

<div class="container_fluid">
    <div class="card mt-5">
        <h5 class="card-header">Profil de l´entreprise</h5>
        <div class="card-body">
            <p class="card-text">Entreprise <span style="padding-left:170px">:&nbsp;&nbsp;&nbsp;&nbsp; <?= $job['nom_entreprise']?></span></p>
            <p class="card-text">Site Internet <span style="padding-left: 154px;">:&nbsp;&nbsp;&nbsp;&nbsp; <?= $job['url_site_entreprise']?></span></p>
            <p class="card-text">Ville <span style="padding-left: 218px;">:&nbsp;&nbsp;&nbsp;&nbsp; <?= $job['localisation']?></span></p>
            <p class="card-text">Pays <span style="padding-left: 219px;">:&nbsp;&nbsp;&nbsp;&nbsp; Benin</span></p>
            <p class="card-text">Secteur d'activite <span style="padding-left: 120px;">:&nbsp;&nbsp;&nbsp;&nbsp; <?= $job['catégorie']?></span></p>
            <p class="card-text mb-5">Slogan <span style="padding-left: 202px;">:&nbsp;&nbsp;&nbsp;&nbsp;  <?= $job['slogan']?></span></p>
            <div class="border_bottom_div"></div>
            <h5 class="mt-4">Description de l'entreprise</h5>
            <p class="card-text"><?= $job['description']?></p>
        </div>
    </div>
</div>

<!-- Detail annonce -->

<div class="container_fluid">
    <div class="card mt-5">
        <h5 class="card-header">Détails de l'annonce</h5>
        <div class="card-body">
            <p class="card-text fw-bold">Poste proposé : Post</p>
            <p class="card-text"><?= $job['description']?></p>
        </div>
    </div>
</div>

<div class="d-grid mt-5 justify-content-sm-center">
    <a href="postule.php?job_name=<?= $job['nom'] ?>&id=<?=$id ?>" class="btn btn-outline-primary me-2  text-white postuler_btn_bottom">Postuler</a>
    
</div>


<?php require_once('footer.php'); ?>