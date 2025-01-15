<?php

final class AnswerMapper implements MapperContract
{
    public static function mapToObject(array $data): Answer
    {
        return new Answer(
            $data['id'],
            $data['title'],
            $data['is_correct']
        );
    }
}
