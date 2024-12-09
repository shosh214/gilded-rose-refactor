public function updateQuality(): void
{
    foreach ($this->items as $item) {
        switch ($item->name) {
            case 'Aged Brie':
                if ($item->quality < 50) {
                    $item->quality++;
                }
                break;
            case 'Backstage passes to a TAFKAL80ETC concert':
                if ($item->quality < 50) {
                    $item->quality++;
                    if ($item->sellIn < 11) {
                        $item->quality++;
                    }
                    if ($item->sellIn < 6) {
                        $item->quality++;
                    }   
                }
                break;
            case 'Sulfuras, Hand of Ragnaros':
                // לא לשנות את sellIn או quality
                break;
            case 'Conjured':
                if ($item->quality > 0) {
                    $item->quality -= 2;
                }
                break;
            default:
                if ($item->quality > 0) {
                    $item->quality--;
                }
                break;
        }

        // הפחתת SellIn
        if ($item->name !== 'Sulfuras, Hand of Ragnaros') {
            $item->sellIn--;
        }

        // עדכון איכות לאחר שהתוקף עבר
        if ($item->sellIn < 0) {
            switch ($item->name) {
                case 'Aged Brie':
                    if ($item->quality < 50) {
                        $item->quality++;
                    }
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $item->quality = 0;
                    break;
                default:
                    if ($item->quality > 0) {
                        $item->quality--;
                    }
                    break;
            }
        }
    }
}
