<?php
namespace Leetcode\Group0001_1000\Solution0021_merge_two_sorted_lists;

/**
 * Problem: 21
 * Title: Merge Two Sorted Lists
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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        $head = new ListNode();
        $list = $head;
        do {
            if (!$list1 || ($list2 && $list1->val > $list2->val)) {
                $list->next = new ListNode($list2->val);
                $list2 = $list2->next;
            } else {
                $list->next = new ListNode($list1->val);
                $list1 = $list1->next;
            }
            $list = $list->next;
        } while ($list1 || $list2);
        return $head->next;
    }
}

