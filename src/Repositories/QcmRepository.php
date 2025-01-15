<?php

final class QcmRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findAll(): array
    {
        $query = "SELECT * FROM qcm";
        $stmt = $this->pdo->query($query);
        $qcmDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($qcmDatas as $qcmData) {
            $qcm[] = QcmMapper::mapToObject($qcmData);
        }

        return $qcm;
    }


    public function find(int $qcmId): Qcm
    {
        $query = "SELECT * FROM qcm WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['id' => $qcmId]);
        $qcmDatas = $stmt->fetch(PDO::FETCH_ASSOC);

        return QcmMapper::mapToObject($qcmDatas);
    }
}
