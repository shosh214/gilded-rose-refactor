

//regular test

public function testNormalItemDegradesQuality(): void
{
    $items = [new Item('test', 5, 7)];
    $gildedRose = new GildedRose($items);

    $gildedRose->updateQuality();

    $this->assertSame(6, $items[0]->quality, 'Quality should degrade by 1 for normal items.');
    $this->assertSame(4, $items[0]->sellIn, 'SellIn should decrease by 1.');
}

//test in case of Aged Brie

public function testAgedBrieIncreasesQuality(): void
{
    $items = [new Item('Aged Brie', 5, 10)];
    $gildedRose = new GildedRose($items);

    $gildedRose->updateQuality();

    $this->assertSame(11, $items[0]->quality, 'Aged Brie should increase in quality by 1.');
    $this->assertSame(4, $items[0]->sellIn, 'SellIn should decrease by 1.');
}


//test in case of Sulfuras

public function testSulfurasDoesNotChange(): void
{
    $items = [new Item('Sulfuras, Hand of Ragnaros', 0, 80)];
    $gildedRose = new GildedRose($items);

    $gildedRose->updateQuality();

    $this->assertSame(80, $items[0]->quality, 'Sulfuras should not change in quality.');
    $this->assertSame(0, $items[0]->sellIn, 'SellIn should not change.');
}

//test in case of Backstage passes

public function testBackstagePassesIncreaseQuality(): void
{
    $items = [new Item('Backstage passes to a TAFKAL80ETC concert', 10, 20)];
    $gildedRose = new GildedRose($items);

    $gildedRose->updateQuality();

    $this->assertSame(22, $items[0]->quality, 'Backstage passes should increase in quality by 2 when sellIn is 10 or less.');
    $this->assertSame(9, $items[0]->sellIn, 'SellIn should decrease by 1.');
}

//test in case of Conjured

public function testConjuredItemDegradesQualityTwiceAsFast(): void
{
    $items = [new Item('Conjured Mana Cake', 5, 6)];
    $gildedRose = new GildedRose($items);

    $gildedRose->updateQuality();

    $this->assertSame(4, $items[0]->quality, 'Conjured items should degrade in quality by 2.');
    $this->assertSame(4, $items[0]->sellIn, 'SellIn should decrease by 1.');
}


