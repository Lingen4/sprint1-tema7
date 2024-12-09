<?php
//require_once dirname(__DIR__). '/vendor/autoload.php';


namespace Tests;

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class numCheckerTest extends TestCase
{

    private $checker;

    protected function setUp(): void
    {
        $this->checker = new NumberChecker(4);
    }

    protected function tearDown(): void
    {
        $this->checker = NULL;
    }

    public function testEvenWithEven(): void
    {

        $this->assertTrue($this->checker->isEven());
    }

    public function testEvenWithOdd(): void
    {

        $this->checker = new NumberChecker(5);
        $this->assertFalse($this->checker->isEven());
    }

    public function testPositiveWithPositive(): void
    {

        $this->assertTrue($this->checker->isPositive());
    }

    public function testPositiveWithNegative()
    {

        $this->checker = new NumberChecker(-1);
        $this->assertFalse($this->checker->isPositive());
    }
}

?>