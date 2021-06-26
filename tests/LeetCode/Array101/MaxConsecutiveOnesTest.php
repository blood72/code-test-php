<?php

namespace Tests\LeetCode\Array101;

use Tests\LeetCode\TestCase;

class MaxConsecutiveOnesTest extends TestCase
{
    protected array $data = [
        [[1,1,0,1,1,1], 3],
        [[1,0,1,1,0,1], 2],
    ];

    /** @dataProvider dataProvider */
    public function test($actual, $expect): void
    {
        $this->assertEquals($expect, $this->solve($actual));
    }
}
