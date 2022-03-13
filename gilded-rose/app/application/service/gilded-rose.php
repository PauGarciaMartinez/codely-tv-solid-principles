<?php

declare(strict_types=1);

namespace GildedRose;

use App\Domain\Item;

final class GildedRose
{
    public function updateQuality(List<Item> $items): void
    {
        foreach($items as $item) {
            $item->update();
        }
    }
}
