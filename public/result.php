<?php
include_once '../utils/autoloader.php';

$qcmManager = new QcmManager();

$score = $qcmManager->evaluateQcm($_POST);


require_once './partials/header.php';

?>

<main>
    <h2>Votre score : <?= $score ?>/<?= count($_POST) ?></h2>
    <a href="/public/home.php">Retour au choix du quiz</a>
</main>




<?php require_once './partials/footer.php';