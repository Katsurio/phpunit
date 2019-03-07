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