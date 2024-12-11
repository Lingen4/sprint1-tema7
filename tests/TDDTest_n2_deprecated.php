<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\TDD2_Deprecated;

class TDDTest_n2_deprecated extends TestCase{

public static function datosProvider(): array{
return [
    [0,32, "reprobado"],
    [33,44, "en Tercera división"],
    [45,59, "en Segunda división"],
    [60,100, "en Primera división"]
];
}

public static function invalidDatosProvider(): array{
    return [
        [-1, "Nota no válida"],
        [101, "Nota no válida"],
      
    ];
    }

 /** @dataProvider datosProvider */

public function testComprobarDivision(int $a, int $b, string $expected):void
{

$notas = range ($a,$b); 
foreach ($notas as $nota){
$nota1 = new TDD2_Deprecated ($nota);
$this->assertSame($expected, $nota1->comprobarNota($nota));}
}

 /** @dataProvider invalidDatosProvider */

public function testDatosInvalidos(int $nota, string $expected):void
{
$nota1 = new TDD2_Deprecated ($nota);
$this->assertSame($expected, $nota1->comprobarNota($nota));
}

}


use App\NumberChecker;

class numCheckerTest_deprecated extends TestCase{
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

     
    //     * @dataProvider datosProvider */

    
    public function testDataProvider(int $numero, bool $esPar, bool $esPositivo) : void {

        $checker = new NumberChecker($numero);

        $this->assertSame($esPar, $checker ->isEven(), "Fallo al declarar que '$numero' es par");
        $this->assertSame($esPositivo, $checker-> isPositive(), "Fallo al declarar que '$numero' es positivo");
        
    }


}