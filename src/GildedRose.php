<?php

namespace App;

class GildedRose
{
    private static $itemsTable = [
        'normal' => Item::class,
        'Aged Brie' => AgedBrie::class,
        'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePasses::class,
        'Conjured Mana Cake' => ConjuredCake::class
    ];
    public static function of($name, $quality, $sellIn)
    {

            if (! array_key_exists($name, self::$itemsTable)) {
                throw new \InvalidArgumentException('Item does not exists');
            }
        $class = self::$itemsTable[$name];

        return new $class($quality, $sellIn);
    }
}
