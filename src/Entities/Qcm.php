<?php

final class Qcm  {

    private string $name;
    private array $questions;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getQuestions(): array
    {
        return $this->questions;
    }

    public function setQuestions(array $questions): self
    {
        foreach($questions as $question)
        {
            if(!$question instanceof Question)
            {
                throw new Exception('Il doit y avoir que des questions dans le tableau');
            }
        }

        $this->questions = $questions;
        return $this;
    }
}

