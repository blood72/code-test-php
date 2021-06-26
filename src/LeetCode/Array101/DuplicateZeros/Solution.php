<?php

namespace LeetCode\Array101\DuplicateZeros;

/**
 * Find Numbers with Even Number of Digits
 * @link https://leetcode.com/problems/duplicate-zeros/
 */
class Solution implements \LeetCode\SolutionInterface
{
    /**
     * 30 / 30 test cases passed.
     * Status: Accepted
     * Runtime: 16 ms
     * Memory Usage: 16.7 MB
     */
    function duplicateZeros(array $arr): array
    {
        $length = count($arr);
        $indexes = 0;
        $i = 0;

        $result = [];
        while ($i < $length - $indexes) {
            $result[] = $arr[$i];

            if ($arr[$i] === 0) {
                $indexes++;

                if ($i >= $length - $indexes) {
                    break;
                }

                $result[] = $arr[$i];
            }

            $i++;
        }

        // original answer (Do the above modifications to the input array in place && output should be "null")
        // $arr = $result;
        //
        // return null;

        return $result; // return null;
    }
}
