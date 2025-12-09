<?php
namespace Leetcode\Group0001_1000\Solution0019_remove_nth_node_from_end_of_list;

/**
 * Problem: 19
 * Title: Remove Nth Node From End of List
 * Difficulty: medium
 */
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{
    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd(ListNode $head, int $n): ?ListNode
    {
        $current = new ListNode(0);
        $current->next = $head;
        $dummy1 = $current;
        $dummy2 = $current;
        while ($dummy1 !== null) {
            $dummy1 = $dummy1->next;
            if ($n >= 0) {
                $n--;
            } else {
                $dummy2 = $dummy2->next;
            }
        }
        $dummy2->next = $dummy2->next?->next;
        return $current->next;
    }
}
