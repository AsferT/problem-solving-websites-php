<?php
namespace Leetcode\Group0001_1000\Solution0018_4sum;

/**
 * Problem: 18
 * Title: 4Sum
 * Difficulty: medium
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum(array $nums, int $target): array
    {
        sort($nums);
        $count = count($nums);
        $result = [];
        for ($i = 0; $i < $count - 3; $i++) {
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }
            for ($j = $i + 1; $j < $count - 2; $j++) {
                if ($j > $i + 1 && $nums[$j] === $nums[$j - 1]) {
                    continue;
                }
                $left = $j + 1;
                $right = $count - 1;
                while ($left < $right) {
                    $total = $nums[$i] + $nums[$j] + $nums[$left] + $nums[$right];
                    if ($total === $target) {
                        $result[] = [$nums[$i], $nums[$j], $nums[$left], $nums[$right]];
                        while ($left < $right && $nums[$left] === $nums[$left + 1]) {
                            $left++;
                        }
                        while ($left < $right && $nums[$right] === $nums[$right - 1]) {
                            $right--;
                        }
                        $left++;
                        $right--;
                    } elseif ($total < $target) {
                        $left++;
                    } else {
                        $right--;
                    }
                }
            }
        }
        return $result;
    }
}
