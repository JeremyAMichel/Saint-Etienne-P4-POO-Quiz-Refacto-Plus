<?php

require_once '../utils/autoloader.php';

// $simulationAnswerData = [
//     "id" => 1,
//     "title" => "blakblaba",
//     "is_correct" => true
// ];




// $answer = AnswerMapper::mapToObject($simulationAnswerData);


$qcmRepository = new QcmRepository();

// $qcms = $qcmRepository->findAll();

// var_dump($qcms);

$qcm = $qcmRepository->find(2);

var_dump($qcm);
