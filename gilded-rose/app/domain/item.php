<?php

declare(strict_types=1);

namespace App\Domain;

abstract class Item
{
    public function __construct(
          private ItemName $name;
          private ItemSellIn $sellIn;
          private ItemQuality $quality;
    ) {
    }
  
    abstract protected function update(): void;
}
