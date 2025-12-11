<?php
namespace Leetcode\Group0001_1000\Solution0023_merge_k_sorted_lists;

/**
 * Problem: 23
 * Title: Merge k Sorted Lists
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
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists(array $lists)
    {
        $vals = [];
        foreach ($lists as $list) {
            $innerList = $list;
            while ($innerList->next !== null) {
                if ($innerList->val !== null) {
                    $vals[] = $innerList->val;
                }
                $innerList = $innerList->next;
            }
            if ($innerList->val !== null) {
                $vals[] = $innerList->val;
            }
        }
        sort($vals);
        $count = count($vals);
        $result = new ListNode();
        $list = $result;
        for ($i = 0; $i < $count; $i++) {
            $list->next = new ListNode($vals[$i]);
            $list = $list->next;
        }
        return $result->next;
    }
}
