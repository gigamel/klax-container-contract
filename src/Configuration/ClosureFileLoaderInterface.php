<?php

declare(strict_types=1);

namespace Klax\Container\Contract\Configuration;

use Closure;

interface ClosureFileLoaderInterface
{
    public function load(string $file): Closure;
}
