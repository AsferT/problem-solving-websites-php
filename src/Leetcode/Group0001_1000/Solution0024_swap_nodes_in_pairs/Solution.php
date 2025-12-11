<?php
namespace Leetcode\Group0001_1000\Solution0024_swap_nodes_in_pairs;

/**
 * Problem: 24
 * Title: Swap Nodes in Pairs
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
     * @return ListNode
     */
    function swapPairs(?ListNode $head): ?ListNode
    {
        $result = new ListNode(0, $head);
        $current = $result;
        while ($current->next !== null && $current->next->next !== null) {
            $node1 = $current->next;
            $node2 = $current->next->next;
            $node1->next = $node2->next;
            $node2->next = $node1;
            $current->next = $node2;
            $current = $node1;
        }
        return $result->next;
    }
}
