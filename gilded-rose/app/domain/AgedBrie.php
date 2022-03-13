<?php

declare(strict_types=1);

namespace App\Domain;

use App\Domain\Item;
use App\Domain\ItemName;
use App\Domain\ItemSellIn;
use App\Domain\ItemQuality;

class AgedBrie extends Item
{
    private const int $TRESHOLD = 50;
    
    public function __construct(
        private ItemName $name,
        private ItemSellIn $sellIn,
        private ItemQuality $quality
    ) {
    }
  
    public function update(): void
    {
        $this->sellIn->decrease();
        $this->quality->decrease();
        
        if ($this->quality->isGreaterThan($TRESHOLD)) {
            $this->quality->increase();
        }
    }
}
