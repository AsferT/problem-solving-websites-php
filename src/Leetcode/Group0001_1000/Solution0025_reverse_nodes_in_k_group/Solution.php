<?php
namespace Leetcode\Group0001_1000\Solution0025_reverse_nodes_in_k_group;

/**
 * Problem: 25
 * Title: Reverse Nodes in k-Group
 * Difficulty: hard
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
     * @param Integer $k
     * @return ListNode
     */
    function reverseKGroup(ListNode $head, int $k): ListNode
    {
        if ($head->next === null || $k === 1) {
            return $head;
        }
        $count = 0;
        $result = new ListNode(0, $head);
        $current = $result;
        $previous = $result;
        while ($current->next !== null) {
            $current = $current->next;
            $count++;
        }
        while ($count >= $k) {
            $current = $previous->next;
            $next = $current->next;
            for ($i = 1; $i < $k; $i++) {
                $current->next = $next->next;
                $next->next = $previous->next;
                $previous->next = $next;
                $next = $current->next;
            }
            $previous = $current;
            $count -= $k;
        }
        return $result->next;
    }
}
