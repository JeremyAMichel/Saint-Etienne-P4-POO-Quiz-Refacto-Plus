<?php

final class AnswerRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }


    public function findAllByQuestionId(int $idQuestion): array
    {
        $query = "SELECT * FROM answer WHERE id_question  = :id_question";
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            ':id_question' => $idQuestion
        ]);
        $answerDatas = $statement->fetchAll(PDO::FETCH_ASSOC);

        $answers = [];

        foreach($answerDatas as $answerData)
        {
            $answers[] = AnswerMapper::mapToObject($answerData);
        }

        return $answers;
    }


}
