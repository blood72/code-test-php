<?php

namespace LeetCode\Array101\MergeSortedArray;

/**
 * Merge Sorted Array
 * @link https://leetcode.com/problems/merge-sorted-array/
 */
class Solution implements \LeetCode\SolutionInterface
{
    /**
     * 59 / 59 test cases passed.
     * Status: Accepted
     * Runtime: 12 ms
     * Memory Usage: 15.6 MB
     */
    function merge(array $nums1, int $m, array $nums2, int $n): array
    {
        // original condition: The final sorted array should be stored inside the array $nums1

        if ($n === 0) {
            return $nums1; // return null;
        } elseif ($m === 0) {
            return $nums2; // $nums1 = $nums2; return null;
        }

        for ($i = $m + $n - 1; $i >= 0; $i--) {
            if ($m === 0 && $n === 0) {
                break;
            } elseif ($m === 0) {
                $nums1[$i] = $nums2[$n - 1];
                $n--;
                continue;
            } elseif ($n === 0) {
                $nums1[$i] = $nums1[$m - 1];
                $m--;
                continue;
            }

            if ($nums1[$m - 1] < $nums2[$n - 1]) {
                $nums1[$i] = $nums2[$n - 1];
                $n--;
            } else {
                $nums1[$i] = $nums1[$m - 1];
                $m--;
            }
        }

        return $nums1; // return null;
    }

    /**
     * sample 4-12ms submission
     */
    function anotherAnswer1(array $nums1, int $m, array $nums2, int $n): array
    {
        for ($i = $m; $i < $m + $n; $i++) {
            $nums1[$i] = array_shift($nums2);
        }

        sort($nums1);

        return $nums1;
    }
}
