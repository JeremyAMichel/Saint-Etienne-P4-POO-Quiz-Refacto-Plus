<?php

final class Answer {
    private string $title;
    private bool $isCorrect;

    public function __construct(string $title, bool $isCorrect = false)
    {
        $this->title = $title;
        $this->isCorrect = $isCorrect;
    }

    public function getTitle(): string 
    {
        return $this->title;
    }
    
}