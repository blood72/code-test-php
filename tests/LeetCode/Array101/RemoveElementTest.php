<?php

namespace Tests\LeetCode\Array101;

use Tests\LeetCode\TestCase;

class RemoveElementTest extends TestCase
{
    protected array $data = [
        [[[3,2,2,3], 3], [2,2]],
        [[[0,1,2,2,3,0,4,2], 2], [0,1,4,0,3]],
    ];

    /** @dataProvider dataProvider */
    public function test($actual, $expect): void
    {
        $k = $this->solve(...$actual);

        // compare returned value
        $this->assertEquals(count($expect), $k);

        // compare modified array
        $actualArray = array_slice($actual[0], 0, count($expect));
        sort($expect);
        sort($actualArray);

        $this->assertEquals($expect, $actualArray);
    }
}
