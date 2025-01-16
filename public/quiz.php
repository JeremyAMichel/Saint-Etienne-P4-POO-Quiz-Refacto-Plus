<?php
include_once '../utils/autoloader.php';

$qcmManager = new QcmManager();




require_once './partials/header.php';

?>

<main>

    <?= $qcmManager->generateQcm($_GET['id']) ?>


</main>



<?php require_once './partials/footer.php';
