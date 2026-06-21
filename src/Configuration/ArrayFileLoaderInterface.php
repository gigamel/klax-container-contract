<?php

declare(strict_types=1);

namespace Klax\Container\Contract\Configuration;

interface ArrayFileLoaderInterface
{
    public function load(string $file): array;
}
