<?php
//require_once dirname(__DIR__). '/vendor/autoload.php';
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class calculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp():void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown():void
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}



?>