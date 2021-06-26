<?php

namespace LeetCode\Array101\MaxConsecutiveOnes;

/**
 * Max Consecutive Ones
 * @link https://leetcode.com/problems/max-consecutive-ones/
 */
class Solution implements \LeetCode\SolutionInterface
{
    /**
     * 42 / 42 test cases passed.
     * Status: Accepted
     * Runtime: 108 ms
     * Memory Usage: 16.5 MB
     */
    function findMaxConsecutiveOnes(array $nums): int
    {
        $count = 0;
        $max = 0;

        foreach ($nums as $num) {
            if ($num === 1) {
                $count++;

                // compare
                if ($max < $count) {
                    $max = $count;
                }
            } else {
                $count = 0; // reset
            }
        }

        return $max;
    }

    /**
     * 42 / 42 test cases passed.
     * Status: Accepted
     * Runtime: 116 ms
     * Memory Usage: 16.8 MB
     */
    function previousAnswer1(array $nums): int
    {
        $count = 0;
        $max = 0;

        foreach ($nums as $num) {
            if ($num === 1) {
                $count++;

                continue;
            }

            $max = max($max, $count);
            $count = 0; // reset
        }

        return max($max, $count);
    }
}
