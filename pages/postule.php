<?php require_once('header.php'); ?>



<form action="confirm_set_candidature.php?id=<?= $_GET['id'] ?>" method="POST">
    <div class=" pt-4 pb-4 text-center text-white" style="background-color: #230939 !important;">
        <h1 class="display-5 fw-bold">Candidature au poste de : <?= $_GET['job_name'] ?></h1>
    </div>

    <div class="container_fluid">
        <div class="card mt-5">
            <h5 class="card-header fw-bold fs-3">Message à envoyer au recruteur</h5>
            <div class="card-body">
                <h5>Votre message</h5>
                <p class="text-muted mb-1" style="font-size: 13px;">limite de 5000 caractères</p>
                <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 350px"></textarea>
                    <label for="floatingTextarea2" class="text-muted">Tapez votre message ici</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Upload CV-->

    <div class="container_fluid">
        <div class="card mt-5">
            <h5 class="card-header fw-bold fs-3">CV (facultatif)</h5>
            <div class="card-body">
                <div class="form-check mt-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Je souhaite envoyer pour cette candidature un autre CV que celui qui est attaché à mon compte (facultatif)
                    </label>
                </div>
                <div id="upload_cv" style="display: none;">
                    <p>Attacher un autre cv</p>
                    <p class="text-muted mt-1 mb-1" style="font-size: 13px;">Les fichiers doivent peser moins de <strong>2 Mo.</strong></p>
                    <p class="text-muted mt-0" style="font-size: 13px;">Extensions autorisées : <strong>doc docx pdf.</strong> </p>
                    <div class="mb-3 mt-5 col-md-4 col-xm-4 col-xs-2">
                        <input class="form-control" name="cv" type="file" id="formFile">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Btn Postule-->

    <div class="d-grid mt-5 justify-content-sm-center">
        <input type="submit" value="Je postule" class="btn btn-outline-primary me-2  text-white postuler_btn_bottom"></input>
    </div>
</form>

<?php require_once('footer.php'); ?>

<script>
    $(document).ready(function() {


        $('#flexCheckDefault').click(function() {

            $('#upload_cv').toggle("slide")

        })

    })
</script>