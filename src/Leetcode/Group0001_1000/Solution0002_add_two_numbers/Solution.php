<?php
namespace Leetcode\Group0001_1000\Solution0002_add_two_numbers;

/**
 * Problem: 2
 * Title: Add Two Numbers
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
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $input = ['l1' => '', 'l2' => ''];
        $current1 = $l1;
        $current2 = $l2;
        while ($current1 !== null || $current2 !== null) {
            $input['l1'] = $current1->val . $input['l1'];
            $current1 = $current1->next;

            $input['l2'] = $current2->val . $input['l2'];
            $current2 = $current2->next;
        }
        // Large Numbers properly added without exponents
        $output = bcadd($input['l1'], $input['l2'], 0);
        $outputArr = str_split($output);
        $outputListNodes = [];

        foreach ($outputArr as $k => $char) {
            $current = new ListNode();
            $current->val = $char;
            if ($k !== 0) {
                $current->next = $outputListNodes[$k-1];
            }
            $outputListNodes[$k] = $current;
        }
        return $outputListNodes[count($outputListNodes)-1];
    }
}
