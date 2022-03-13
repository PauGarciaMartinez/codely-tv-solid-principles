<?php

declare(strict_types=1);

namespace App\Domain;

class ItemSellIn
{
    public function __construct(
        private int $value;
    ) {
    }
  
    public function decrease(): ItemSellIn
    {
        return new ItemSellIn($value - 1);
    }
  
    public function isLessThan(int $days): bool
    {
        return $this->value < $days;
    }
    
    public function isEqualTo(int $days): bool
    {
        return $this->value === $days;
    }
}
