<?php

declare(strict_types=1);

namespace Klax\Container\Contract;

use Closure;
use Psr\Container\ContainerInterface as PsrContainer;

interface ContainerInterface extends PsrContainer
{
    public function singleton(string $id, null|object|string $service = null): void;

    public function factory(string $id, Closure $factory): void;
}
