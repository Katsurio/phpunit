<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName(), "Billy");
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new \App\Models\User;

        $user->setLastName('Joel');

        $this->assertEquals($user->getLastName(), "Joel");
    }

    public function testThatWeCanGetTheFullName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Billy');

        $user->setLastName('Joel');

        $this->assertEquals($user->getFullName(), "Billy Joel");
    }
}