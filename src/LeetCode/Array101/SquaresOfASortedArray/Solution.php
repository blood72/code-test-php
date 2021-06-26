<?php

namespace LeetCode\Array101\SquaresOfASortedArray;

/**
 * Squares of a Sorted Array
 * @link https://leetcode.com/problems/squares-of-a-sorted-array/
 */
class Solution implements \LeetCode\SolutionInterface
{
    /**
     * 137 / 137 test cases passed.
     * Status: Accepted
     * Runtime: 68 ms
     * Memory Usage: 18.2 MB
     */
    function sortedSquares(array $nums): array
    {
        $l = 0;                 // left index
        $r = count($nums) -1;   // right index

        $result = [];

        while ($l <= $r) {
            if (abs($nums[$l]) > abs($nums[$r])) {
                $result[] = $nums[$l] * $nums[$l];
                $l++;
            } else {
                $result[] = $nums[$r] * $nums[$r];
                $r--;
            }
        }

        return array_reverse($result);
    }

    /**
     * 137 / 137 test cases passed.
     * Status: Accepted
     * Runtime: 80 ms
     * Memory Usage: 18.4 MB
     */
    function previousAnswer2(array $nums): array
    {
        $l = 0;                 // left index
        $r = count($nums) -1;   // right index

        $result = [];

        while ($l <= $r) {
            if (abs($nums[$l]) > abs($nums[$r])) {
                array_push($result, $nums[$l] * $nums[$l]);
                $l++;
            } else {
                array_push($result, $nums[$r] * $nums[$r]);
                $r--;
            }
        }

        return array_reverse($result);
    }

    /**
     * 137 / 137 test cases passed.
     * Status: Accepted
     * Runtime: 92 ms
     * Memory Usage: 18.7 MB
     */
    function previousAnswer1(array $nums): array
    {
        foreach ($nums as &$num) {
            $num *= $num;
        }

        sort($nums);

        return $nums;
    }
}
