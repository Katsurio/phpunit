<?php

class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueAssertsToTrue()
    {
        $bat = "batt";
        $this->assertEquals($bat, "batt");
    }
}