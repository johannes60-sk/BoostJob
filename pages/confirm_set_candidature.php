<?php

    require_once('header.php');
    require_once('../class/ConnectDb.php');

    if(isset($_GET)){

        if(!empty($_GET['id'])){

            $id = $_GET['id'];

            $db = new ConnectDb();

            $job = $db->query("SELECT * FROM jobs WHERE id = :id", ['id' => $id])->fetch();


            if($job){

                $data =  [
                    "nom" => $job['nom'],
                    "id_candidature" => $_GET['id'],
                    "localisation" => $job['localisation'],
                    "type" => $job['type'],
                    "categorie" => $job['catégorie'],
                    "description" => $job['description'],
                    "email" => $job['email_candidature'],
                    "salaire" => $job['salaire'],
                    "nom_entreprise" => $job['nom_entreprise'],
                    "url_site_entreprise" => $job['url_site_entreprise'],
                    "slogan" => $job['slogan'],
                    "message_au_recruteur" => $_POST['message']
                ];

                 $db->query("INSERT INTO candidature(id_candidature, nom, localisation, type, categorie, description, email, salaire, nom_entreprise, url_site_entreprise, slogan, message_au_recruteur)  
                 VALUES(:id_candidature, :nom, :localisation, :type, :categorie, :description, :email, :salaire, :nom_entreprise, :url_site_entreprise, :slogan, :message_au_recruteur)", $data);

            }
        }
    }




?>

<div class=" pt-4 pb-4 text-center text-white" style="background-color: #230939 !important;">
    <h1 class="display-5 fw-bold">Candidature confirmée</h1>
</div>


<div class="card border-success mb-3 mt-5" style="max-width: 18rem; border-radius: 0px !important; margin-left:30%; width:40%; max-width: 100%;">
    <div class="card-body text-success p-0 pb-2">
        <h5 class="card-title text-center">Envoyer</h5>
        <p class="card-text text-center px-2 fs-4"><i class="bi bi-check-circle "></i> Votre candidature a bien été envoyer au recruteur</p>
    </div>
</div>


<div style="margin-left: 20%; width:60%" class="text-center fs-3 fw-bold ">
    Redirection vers votre tableau de board dans :
    <span class="text-center fs-3 fw-bold " id="count-down-timer"></span>
</div>

<script>
    function paddedFormat(num) {

        return num < 10 ? "0" + num : num;
    }

    function startCountDown(duration, element) {

        let secondsRemaining = duration;
        let min = 0;
        let sec = 0;

        let countInterval = setInterval(function() {

            min = parseInt(secondsRemaining / 60);
            sec = parseInt(secondsRemaining % 60);

            element.textContent = `${paddedFormat(sec)}`; //element.textContent = `${paddedFormat(min)}:${paddedFormat(sec)}`;

            secondsRemaining = secondsRemaining - 1;
            if (secondsRemaining < 0) {
                clearInterval(countInterval);

                window.location.replace("../dashboard/index.php?page=Candidate&id=<?= $_GET['id'] ?>");
            }

        }, 1000);
    }

    window.onload = function() {
        let time_minutes = 0; // Value in minutes
        let time_seconds = 5; // Value in seconds

        let duration = time_seconds; // let duration = time_minutes * 60 + time_seconds;

        element = document.querySelector('#count-down-timer');
        element.textContent = `${paddedFormat(time_seconds)}`; //    element.textContent = `${paddedFormat(time_minutes)}:${paddedFormat(time_seconds)}`;

        startCountDown(--duration, element);

    };
</script>


<?php require_once('footer.php'); ?>