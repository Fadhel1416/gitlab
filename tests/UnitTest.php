<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Demo;

class UnitTest extends TestCase
{
    public function testDemo()
    {
        $demo = new Demo();

        $demo->setFadhel('ali');
 
        $this->assertTrue($demo->getFadhel() === 'ali');
    }
}
