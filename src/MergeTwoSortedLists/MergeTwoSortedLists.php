<?php

declare(strict_types=1);

namespace Mwawrzyniak\LeetPhp\MergeTwoSortedLists;

use Mwawrzyniak\LeetPhp\MergeTwoSortedLists\ListNode;

class MergeTwoSortedLists
{
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    public function mergeTwoSortedLists($list1, $list2)
    {
        if (!$list1) {
            return $list2;
        }
        
        if (!$list2) {
            return $list1;
        }

        $arraySorted = [];
        $expectedList1 = $list1;
        $expectedList2 = $list2;
        
        while ($expectedList1 != null) {
            $arraySorted[] = $expectedList1->val;
            $expectedList1 = $expectedList1->next;
        }
        while ($expectedList2 != null) {
            $arraySorted[] = $expectedList2->val;
            $expectedList2 = $expectedList2->next;
        }

        \sort($arraySorted);

        $head = new ListNode($arraySorted[0]);
        $current = $head; 
        
        for ($i = 1; $i < count($arraySorted); $i++) {
            $newNodeList = new ListNode($arraySorted[$i]);
            $current->next = $newNodeList;
            $current = $newNodeList;
        }

        return $head;
    }
}