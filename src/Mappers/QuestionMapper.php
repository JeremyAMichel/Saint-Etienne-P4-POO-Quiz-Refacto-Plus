<?php

final class QuestionMapper implements MapperContract
{
    public static function mapToObject(array $data): Question {
        return new Question(
            $data['id'],
            $data['title'],
            $data['explaination_answer']
        );
    }
}