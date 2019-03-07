<?php

class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $bat = "batt";
        $this->assertEquals($bat, "batt");
    }
}