<?php

namespace LeetCode\Array101\FindNumbersWithEvenNumberOfDigits;

/**
 * Find Numbers with Even Number of Digits
 * @link https://leetcode.com/problems/find-numbers-with-even-number-of-digits/
 */
class Solution implements \LeetCode\SolutionInterface
{
    /**
     * 104 / 104 test cases passed.
     * Status: Accepted
     * Runtime: 12 ms
     * Memory Usage: 15.7 MB
     */
    function findNumbers(array $nums): int
    {
        $result = 0;

        foreach ($nums as $num) {
            if (strlen((string) $num) % 2 === 0) {
                $result++;
            }
        }

        return $result;
    }
}
