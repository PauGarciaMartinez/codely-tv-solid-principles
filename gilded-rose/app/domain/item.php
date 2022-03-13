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
    
    /* Start getters region */
    
    public function getName(): ItemName
    {
        return $this->name;
    }
    
    public function getSellIn(): ItemSellIn
    {
        return $this->sellIn;
    }
    
    public function getQuality(): ItemQuality
    {
        return $this->quality;
    }
    
    /* End getters region */
    
    public function decreaseSellIn(): void
    {
        $this->sellIn = $this->sellIn->decrease();
    }
    
    public function hasToBeSoldIn(int $days): bool
    {
        return $this->sellIn->isLessThan($days);
    }
    
    public function increaseQuality(): void
    {
        $this->quality = $this->quality->increase();
    }
    
    public function decreaseQuality(): void
    {
        $this->quality = $this->quality->decrease();
    }
    
    public function hasToBeLessThan(int $value): bool
    {
        return $this->quality->isLessThan($value);
    }
    
        public function hasToBeGreaterThan(int $value): bool
    {
        return $this->quality->isLessThan($value);
    }
}
