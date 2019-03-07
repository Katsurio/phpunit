<?php

namespace App\Support;

class Collection
{
    protected $items = [];
    public function get()
    {

    }
}

//UserTest.php:

class UserTest extends \PHPUnit\Framework\TestCase
{
    protected $user;

    public function setUp()
    {
        $this->user = new App\Models\User;
    }

    /** @test */ // functions will run w/o test-prepend if you add @test
//    public function testThatWeCanGetTheFirstName()
    public function that_we_can_get_the_first_name()
    {
        $this->user->setFirstName('Billy');

        $this->assertEquals($this->user->getFirstName(), "Billy");
    }

    public function testThatWeCanGetTheLastName()
    {
        $this->user->setLastName('Joel');

        $this->assertEquals($this->user->getLastName(), "Joel");
    }

    public function testThatWeCanGetTheFullName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Billy');

        $user->setLastName('Joel');

        $this->assertEquals($user->getFullName(), "Billy Joel");
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new \App\Models\User;

        $user->setFirstName('  Billy     ');

        $user->setLastName('         Joel');

        $this->assertEquals($user->getFirstName(), "Billy");
        $this->assertEquals($user->getLastName(), "Joel");
    }

    public function testEmailCanBeSet()
    {
        $user = new \App\Models\User;
        $user->setEmail('billy@codephish.com');

        $this->assertEquals($user->getEmail(), 'billy@codephish.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Billy');

        $user->setLastName('Joel');

        $user->setEmail('billy@codephish.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Billy Joel');
        $this->assertEquals($emailVariables['email'], 'billy@codephish.com');

    }
}