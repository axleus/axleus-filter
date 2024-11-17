<?php

declare(strict_types=1);

namespace Axleus\Filter;

final class ConfigProvider
{
    public const UUID_DEFAULT_VERSION = 7;

    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
        ];
    }

    public function getDependencyConfig(): array
    {
        return [
            'invokables' => [
                DbDateFormatter::class      => DbDateFormatter::class,
                DelimitedString::class      => DelimitedString::class,
                FqcnToControllerName::class => FqcnToControllerName::class,
                FqcnToModuleName::class     => FqcnToModuleName::class,
                LabelToTitle::class         => LabelToTitle::class,
                TitleToLabel::class         => TitleToLabel::class,
                PadFloatString::class       => PadFloatString::class,
                PasswordHash::class         => PasswordHash::class,
                RegistrationHash::class     => RegistrationHash::class,
                Uuid::class                 => Uuid::class,
            ],
        ];
    }
}
