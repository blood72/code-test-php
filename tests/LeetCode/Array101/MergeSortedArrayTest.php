<?php

namespace Tests\LeetCode\Array101;

use Tests\LeetCode\TestCase;

class MergeSortedArrayTest extends TestCase
{
    protected array $data = [
        [[[1,2,3,0,0,0], 3, [2,5,6], 3], [1,2,2,3,5,6]],
        [[[1], 1, [], 0], [1]],
        [[[0], 0, [1], 1], [1]],
    ];

    /** @dataProvider dataProvider */
    public function test($actual, $expect): void
    {
        $this->assertEquals($expect, $this->solve(...$actual));
    }
}
