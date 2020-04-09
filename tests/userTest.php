<?php
use PHPUnit\Framework\TestCase;
use App\User;

class userTest extends TestCase
{
    /** @test */
    public function isValid()
    {
        $user = new User('test@gmail.com', 15, 'olivier', 'forly');
        $this->assertSame(true, $user->isValidUser());
    }

}