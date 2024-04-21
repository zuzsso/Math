<?php

declare(strict_types=1);

namespace Math\Numbers\Service;

use Math\Numbers\UseCase\CheckStringRepresentsIntegerValue;

class StringRepresentsIntegerValueChecker implements CheckStringRepresentsIntegerValue
{
    public function checkPositiveOrZero(string $s): bool
    {
        return self::checkPositiveOrZeroStatic($s);
    }

    public static function checkPositiveOrZeroStatic(string $s): bool
    {
        return preg_match("/^\d+$/", $s) === 1;
    }
}
