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

var_dump($qcm->getQuestions()[0]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<section>
    
    <h2><?= $qcm->getName() ?></h2>

    <?php foreach($qcm->getQuestions() as $question){ ?>
        <h3><?= $question->getTitle() ?></h3>
        <ul>
            <?php foreach($question->getAnswers() as $answer){ ?>
                <li><?= $answer->getTitle() ?></li>
            <?php } ?>   
        </ul>

    <?php } ?>
</section>

</body>

</html>