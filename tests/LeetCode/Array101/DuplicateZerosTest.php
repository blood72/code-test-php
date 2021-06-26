<?php

namespace Tests\LeetCode\Array101;

use Tests\LeetCode\TestCase;

class DuplicateZerosTest extends TestCase
{
    protected array $data = [
        [[1,0,2,3,0,4,5,0], [1,0,0,2,3,0,0,4]],
        [[1,2,3], [1,2,3]],
        // custom cases
        [[1,2,0,3], [1,2,0,0]],
        [[1,0,2,0,3], [1,0,0,2,0]],
        [[0,1,0,2], [0,0,1,0]],
        [[0,0,1,0], [0,0,0,0]],
    ];

    /** @dataProvider dataProvider */
    public function test($actual, $expect): void
    {
        $this->assertEquals($expect, $this->solve($actual));
    }
}
