<?php
//require_once dirname(__DIR__). '/vendor/autoload.php';

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class numCheckerTest_n2 extends TestCase
{

    public static function datosProvider(): array{
        return [
            [-2, true, false],
            [-1, false, false],
            [0, true, false],
            [1, false, true],
            [2, true, true],
            [3, false,true]
        ];
        }

        /** 
         * @dataProvider datosProvider */

    public function testDataProvider(int $numero, bool $esPar, bool $esPositivo) : void {

        $checker = new NumberChecker($numero);

        $this->assertSame($esPar, $checker ->isEven(), "Fallo al declarar que '$numero' es par");
        $this->assertSame($esPositivo, $checker-> isPositive(), "Fallo al declarar que '$numero' es positivo");
        
    }

}
