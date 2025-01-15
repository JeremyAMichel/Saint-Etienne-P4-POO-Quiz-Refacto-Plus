<?php

final class Answer
{
    private int $id;
    private string $title;
    private bool $isCorrect;

    public function __construct(int $id, string $title, bool $isCorrect = false)
    {
        $this->id = $id;
        $this->title = $title;
        $this->isCorrect = $isCorrect;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getIsCorrect(): bool
    {
        return $this->isCorrect;
    }
}
