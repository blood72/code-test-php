<?php

namespace Tests\LeetCode\Array101;

use Tests\LeetCode\TestCase;

class FindNumbersWithEvenNumberOfDigitsTest extends TestCase
{
    protected array $data = [
        [[12,345,2,6,7896], 2],
        [[555,901,482,1771], 1],
    ];

    /** @dataProvider dataProvider */
    public function test($actual, $expect): void
    {
        $this->assertEquals($expect, $this->solve($actual));
    }
}
