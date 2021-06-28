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
    function duplicateZeros(array &$arr)
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
        $arr = $result;

        return null;
    }

    /**
     * sample 8 ms submission
     */
    function anotherAnswer1(array &$arr)
    {
        $newArr = [];
        $length = count($arr);
        $count = 0;

        for ($i = 0; $i < $length; $i++) {
            if ($arr[$i] === 0 && $count < $length - 1) {
                $newArr[] = 0;
                $newArr[] = 0;
                $count += 2;
            } else {
                $newArr[] = $arr[$i];
                $count++;
            }

            if ($count === $length) {
                $arr = $newArr;
                return null;
            }
        }

        $arr = $newArr;
        return null;
    }

    /**
     * sample 12 ms submission
     */
    function anotherAnswer2(array &$arr)
    {
        $length = count($arr);
        $zeros = 0;

        // count the number of zero at first
        foreach ($arr as $num) {
            if ($num === 0) {
                $zeros++;
            }
        }

        // original code: "for ($i = $len-1; $i >= 0; $i--) {"
        for ($i = $length - 1; $zeros > 0; $i--) {
            if ($i + $zeros < $length) {
                $arr[$i + $zeros] = $arr[$i];
            }

            if ($arr[$i] === 0) {
                $zeros--;

                if ($i + $zeros < $length) {
                    $arr[$i + $zeros] = 0;
                }
            }
        }

        return null;
    }

    /**
     * sample 12 ms submission
     */
    function anotherAnswer3(array &$arr)
    {
        $n = count($arr);
        $result = [];

        foreach ($arr as $key => $val) {
            if ($val === 0) {
                $result[] = 0;
            }

            $result[] = $val;
        }

        $arr = array_slice($result, 0, $n);
    }
}
