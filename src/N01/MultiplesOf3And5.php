<?php

namespace Acme\Problems\N01;

use Acme\Problems\Solvable;

class MultiplesOf3And5 implements Solvable
{
    protected $limit;

    public function __construct(int $limit = 1000)
    {
        $this->limit = $limit;
    }

    /**
     * If we list all the natural numbers below 10 that are multiples of 3 or 5,
     * we get 3, 5, 6 and 9.
     * The sum of these multiples is 23.
     *
     * Find the sum of all the multiples of 3 or 5 below 1000.
     * @return float
     */
    public function solve(): float
    {
        $multiples = array_filter(range(1, $this->limit - 1), function($i) {
            return $i % 3 === 0 || $i % 5 === 0;
        });

        return array_sum($multiples);
    }
}