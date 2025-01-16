<?php

final class QcmManager
{

    private QcmRepository $qcmRepository;
    private QuestionRepository $questionRepository;
    private AnswerRepository $answerRepository;

    public function __construct()
    {
        $this->qcmRepository = new QcmRepository();
        $this->questionRepository = new QuestionRepository();
        $this->answerRepository = new AnswerRepository();
    }


    public function generateQcm(int $idQuiz): string
    {
        $qcm = $this->buildQcm($idQuiz);

        // ici on pourrait faire les traitement supplémentaire d'un début de quiz


        return $this->displayQcm($qcm);
    }

    public function evaluateQcm(array $userAnswers): int
    {
        $score =0;

        foreach($userAnswers as $userAnswer)
        {
            if($userAnswer === "1")
            {
                $score += 1;
            }
        }

        return $score;
    }

    private function buildQcm(int $idQuiz): Qcm
    {
        $qcm = $this->qcmRepository->find($idQuiz);
        $questions = $this->questionRepository->findAllByQcmId($idQuiz);

        $qcm->setQuestions($questions);

        /**
         * @var Question $question
         */
        foreach ($qcm->getQuestions() as $question) {
            $answers = $this->answerRepository->findAllByQuestionId($question->getId());
            $question->setAnswers($answers);
        }

        return $qcm;
    }


    private function displayQcm(Qcm $qcm)
    {
        ob_start();
?>

        <section>

            <h2><?= $qcm->getName() ?></h2>

            <form action="/public/result.php" method="post">


                <?php foreach ($qcm->getQuestions() as $question): ?>
                    <h3><?= $question->getTitle() ?></h3>
                    <ul>
                        <?php foreach ($question->getAnswers() as $answer): ?>
                            <input type="radio" name="question<?= $question->getId() ?>" value="<?= $answer->getIsCorrect() ?>"><?= $answer->getTitle() ?></input>
                        <?php endforeach ?>
                    </ul>

                <?php endforeach ?>

                <button type="submit">Valider</button>
            </form>
        </section>


<?php
        return ob_get_clean();
    }
}
