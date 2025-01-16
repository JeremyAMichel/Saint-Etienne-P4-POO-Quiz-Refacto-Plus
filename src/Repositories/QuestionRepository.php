<?php

final class QuestionRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }


    public function findAllByQcmId(int $qcmId): array
    {
        $query = "SELECT * FROM question WHERE id_qcm = :id_qcm";
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            ':id_qcm' => $qcmId
        ]);
        $questionDatas = $statement->fetchAll(PDO::FETCH_ASSOC);

        $questions = [];

        foreach($questionDatas as $questionData)
        {
            $questions[] = QuestionMapper::mapToObject($questionData);
        }

        return $questions;



    }


}
