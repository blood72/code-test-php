<?php

namespace Tests\LeetCode\Array101;

use Tests\LeetCode\TestCase;

class SquaresOfASortedArrayTest extends TestCase
{
    protected array $data = [
        [[-4,-1,0,3,10], [0,1,9,16,100]],
        [[-7,-3,2,3,11], [4,9,9,49,121]],
    ];

    /** @dataProvider dataProvider */
    public function test($actual, $expect): void
    {
        $this->assertEquals($expect, $this->solve($actual));
    }
}
