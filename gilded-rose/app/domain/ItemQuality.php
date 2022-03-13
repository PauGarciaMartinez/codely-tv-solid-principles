<?php

declare(strict_types=1);

namespace App\Domain;

class ItemQuality
{
    public function __construct(
        private int $value;
    ) {
    }
  
    public function decrease(): ItemQuality
    {
        return new ItemQuality($this->value - 1);
    }
  
    public function increase(): ItemQuality
    {
        return new ItemQuality($this->value + 1);
    }
  
    public function isLessThan(int $value): bool
    {
        return $this->value < $value;
    }
  
    public function isGreaterThan(int $value): bool
    {
        return $this->value > $value;
    }
}
