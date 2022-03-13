<?php

declare(strict_types=1);

namespace App\Domain;

abstract class ItemName
{
    public function __construct(
        private string $name;
    ) {
    }
    
    public function isEqualTo(string $name): bool
    {
        return $this->name === $name;
    }
    
    public function isNotEqualTo(string $name): bool
    {
        return $this->name !== $name;
    }
}
