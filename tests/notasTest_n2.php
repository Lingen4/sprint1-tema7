<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use function App\comprobarNota;

class notasTest_n2 extends TestCase{

public static function datosProvider(): array{
return [
    [0,32, "reprobado"],
    [33,44, "en Tercera división"],
    [45,59, "en Segunda división"],
    [60,100, "en Primera división"]
];
}

 /** @dataProvider datosProvider */

public function testComprobarDivision(int $a, int $b, string $expected):void
{
$notas = range ($a,$b); 
foreach ($notas as $nota){
$resultado = comprobarNota($nota);
$this->assertSame($expected, $resultado);}
}

}
