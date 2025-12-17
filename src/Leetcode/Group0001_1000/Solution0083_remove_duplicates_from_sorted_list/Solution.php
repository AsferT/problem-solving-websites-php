<?php
namespace Leetcode\Group0001_1000\Solution0083_remove_duplicates_from_sorted_list;

/**
 * Problem: 83
 * Title: Remove Duplicates from Sorted List
 * Difficulty: easy
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
    function deleteDuplicates(?ListNode $head): ?ListNode
    {
        $result = $head;
        while ($result !== null && $result->next !== null) {
            // Check if the current value is the same as the next value, so we can skip the node
            if ($result->val === $result->next->val) {
                $result->next = $result->next->next;
            } else {
                // Value is different
                $result = $result->next;
            }
        }
        return $head;
    }
}
