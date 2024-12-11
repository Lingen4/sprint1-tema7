<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\Nota;

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
$nota1 = new Nota ($nota);
$this->assertSame($expected, $nota1->comprobarNota($nota));}
}

}
