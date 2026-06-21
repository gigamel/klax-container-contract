<?php

declare(strict_types=1);

namespace Klax\Container\Contract;

interface KernelInterface
{
    public function loadServices(array $files): static;
}
