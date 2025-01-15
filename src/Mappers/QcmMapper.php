<?php

final class QcmMapper implements MapperContract
{
    public static function mapToObject(array $data): Qcm {
        return new Qcm(
            $data['id'],
            $data['name']
        );
    }
}