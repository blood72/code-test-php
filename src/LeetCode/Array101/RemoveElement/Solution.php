<?php

namespace LeetCode\Array101\RemoveElement;

/**
 * Remove Element
 * @link https://leetcode.com/problems/remove-element/
 */
class Solution implements \LeetCode\SolutionInterface
{
    /**
     * 113 / 113 test cases passed.
     * Status: Accepted
     * Runtime: 12 ms
     * Memory Usage: 15.6 MB
     */
    function removeElement(&$nums, $val): int
    {
        $offset = count($nums) - 1;

        for ($i = $offset; $i >= 0; $i--) {
            if ($nums[$i] === $val) {
                $nums[$i] = $nums[$offset];
                $offset--;
            }
        }

        return $offset + 1;
    }
}
