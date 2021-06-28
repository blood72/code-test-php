<?php

namespace Tests\LeetCode;

use LeetCode\SolutionInterface;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected SolutionInterface $solution;
    protected array $data = [];

    /** @dataProvider dataProvider */
    abstract public function test($actual, $expect): void;

    public function dataProvider(): array
    {
        return $this->data;
    }

    /**
     * Dynamically execute the first method of the solution class.
     *
     * @param  mixed ...$params
     * @return mixed
     */
    protected function solve(&...$params): mixed
    {
        $method = get_class_methods($this->solution)[0];

        return $this->solution->$method(...$params);
    }

    /**
     * Guess the appropriate solution class for the test.
     *
     * @return string
     */
    protected function guessSolutionClass(): string
    {
        // ex. "Tests"(5) . "\LeetCode\Array101\MaxConsecutiveOnes" . "Test"(4)
        $basename = substr(get_class($this), 5, -4);

        return $basename . '\\Solution';
    }

    /**
     * This method is called before each test.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        if (class_exists($this->guessSolutionClass())) {
            $class = $this->guessSolutionClass();
            $this->solution = new $class;
        }
    }
}
