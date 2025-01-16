<?php
include_once '../utils/autoloader.php';

$qcmRepository = new QcmRepository();

$qcms = $qcmRepository->findAll();

require_once './partials/header.php';

?>


<main>
    <h1>Choisis ton quiz !</h1>
    <ul>
        <?php
        /**
         * @var Qcm $qcm
         */
        foreach($qcms as $qcm): ?>
            <li>
                <a href="quiz.php?id=<?= $qcm->getId() ?>">
                    <?= $qcm->getName() ?>
                </a>
            </li>

        <?php endforeach ?>
    </ul>

</main>



<?php require_once './partials/footer.php';
