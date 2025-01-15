<?php
include_once '../utils/autoloader.php';

$qcm = new Qcm("POO");
$question1 = new Question("POO signifie :");

$answers1 = [
    new Answer('Programmation Orientée Objet', true),
    new Answer('Papillon Onirique Ostentatoire')
];

$question1->setAnswers($answers1);
$question1->setExplainationAnswer('La réponse correcte est "Programmation Orientée Objet".');

$questions = [
    $question1,
];

$qcm->setQuestions($questions);

$qcmManager = new QcmManager();

require_once './partials/header.php';

?>


<main>
    <?= $qcmManager->displayQcm($qcm) ?>

</main>



<?php require_once './partials/footer.php';
