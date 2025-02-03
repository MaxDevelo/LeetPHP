<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Mwawrzyniak\LeetPhp\MergeTwoSortedLists\ListNode;
use Mwawrzyniak\LeetPhp\MergeTwoSortedLists\MergeTwoSortedLists;

class MergeTwoSortedListsTest extends TestCase
{
    protected MergeTwoSortedLists $mergeTwoSortedLists;
    protected ListNode $list1;
    protected ListNode $list2;
    protected ListNode $listResult;
    protected function setUp(): void
    {
        $this->mergeTwoSortedLists = new MergeTwoSortedLists();
        $this->setLists();
    }

    protected function setLists()
    {
        // Set List 1
        $this->list1 = new ListNode(1);
        $this->list1->next = new ListNode(2);
        $this->list1->next->next = new ListNode(4);
    
        // Set List 2
        $this->list2 = new ListNode(1);
        $this->list2->next = new ListNode(3);
        $this->list2->next->next = new ListNode(4);
    
        // Expected Merged Result
        $this->listResult = new ListNode(1);
        $current = $this->listResult;
        
        foreach ([1, 2, 3, 4, 4] as $val) {
            $current->next = new ListNode($val);
            $current = $current->next;
        }
    }
    

    public function testmergeTwoSortedLists()
    {
        $result = $this->mergeTwoSortedLists->mergeTwoSortedLists($this->list1, $this->list2);

        $expected = $this->listResult;
        while ($expected !== null && $result !== null) {
            $this->assertEquals($expected->val, $result->val);
            $expected = $expected->next;
            $result = $result->next;
        }
    
        $this->assertNull($expected);
        $this->assertNull($result);
    }
    
    protected function tearDown(): void
    {
        unset(
            $this->mergeTwoSortedLists,
            $this->list1,
            $this->list2,
            $this->listResult
        );
    }
}