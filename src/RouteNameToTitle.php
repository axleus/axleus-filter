<?php

declare(strict_types=1);

namespace Axleus\Filter;

use Laminas\Filter;

use function ucwords;
use function str_replace;

final class LabelToTitle implements Filter\FilterInterface
{
    /** @inheritDoc */
    public function filter($value)
    {
        return ucwords(str_replace(['.', '-', '_'], ' ', $value));
    }
}
