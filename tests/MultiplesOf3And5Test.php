<?php

namespace Acme\Problems\Tests;

use Acme\Problems\N01\MultiplesOf3And5;
use PHPUnit\Framework\TestCase;

class MultiplesOf3And5Test extends TestCase
{

    public function testItCalculatesTheMultiplesBelow10()
    {
        $multiples = new MultiplesOf3And5(10);

        $this->assertEquals(23, $multiples->solve());
    }

    public function testItCalculatesTheMultiplesBelow1000()
    {
        $multiples = new MultiplesOf3And5(1000);

        $this->assertEquals(233168, $multiples->solve());
    }
}
