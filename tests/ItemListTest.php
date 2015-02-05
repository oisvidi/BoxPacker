<?php
/**
 * Box packing (3D bin packing, knapsack problem)
 * @package BoxPacker
 * @author Doug Wright
 */

namespace DVDoug\Tests\BoxPacker;

use DVDoug\BoxPacker\DefaultItem;
use DVDoug\BoxPacker\ItemList;

class ItemListTest extends \PHPUnit_Framework_TestCase
{

    function testCompare()
    {

        $box1 = new DefaultItem('Small', 20, 20, 2, 100);
        $box2 = new DefaultItem('Large', 200, 200, 20, 1000);
        $box3 = new DefaultItem('Medium', 100, 100, 10, 500);

        $list = new ItemList;
        $list->insert($box1);
        $list->insert($box2);
        $list->insert($box3);

        $sorted = [];
        while (!$list->isEmpty()) {
            $sorted[] = $list->extract();
        }
        self::assertEquals(array($box2, $box3, $box1), $sorted);
    }
}
