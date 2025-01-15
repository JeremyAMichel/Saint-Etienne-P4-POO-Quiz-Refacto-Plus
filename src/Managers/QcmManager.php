<?php

final class QcmManager
{


    public function displayQcm(Qcm $qcm)
    {
        ob_start();
?>

<section>
    
    <h2><?= $qcm->getName() ?></h2>

    <?php foreach($qcm->getQuestions() as $question): ?>
        <h3><?= $question->getTitle() ?></h3>
        <ul>
            <?php foreach($question->getAnswers() as $answer): ?>
                <li><?= $answer->getTitle() ?></li>
            <?php endforeach ?>   
        </ul>

    <?php endforeach ?>
</section>


<?php
        return ob_get_clean();
    }
}
