<?php

declare(strict_types=1);

namespace Math;

use DiManifest\AbstractDependencyInjection;
use Math\Numbers\Service\FloatsService;
use Math\Numbers\Service\StringRepresentsIntegerValueChecker;
use Math\Numbers\UseCase\CheckStringRepresentsIntegerValue;
use Math\Numbers\UseCase\EqualFloats;

use function DI\autowire;

class DependencyInjectionManifest extends AbstractDependencyInjection
{
    public static function getDependencies(): array
    {
        return [
            CheckStringRepresentsIntegerValue::class => autowire(StringRepresentsIntegerValueChecker::class),
            EqualFloats::class => autowire(FloatsService::class)
        ];
    }
}
