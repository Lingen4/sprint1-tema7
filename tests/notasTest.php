<?php


namespace Tests;

use PHPUnit\Framework\TestCase;

use function App\comprobarNota;

class notasTest extends TestCase{

   /* public static function datosProvider(): array{

        return [
            [0,32, "reprobado"],
            [33,44, "en Tercera división"],
            [45,59, "en Segunda división"],
            [60,100, "en Primera división"]
        ];
    }*/

/** @dataProvider datosProvider */

    /*public function testComprobarDivision(int $a, int $b, string $expected):void
    {
       $notas = range ($a,$b); 
       foreach ($notas as $nota){
        $resultado = comprobarNota($nota);
       $this->assertSame($expected, $resultado);}
    }*/

    public function testMenor33(){

        $resultado=comprobarNota(32);
        $this->assertSame("reprobado", $resultado);
        $resultado=comprobarNota(33);
        $this->assertSame("reprobado", $resultado);
    }

    public function testEntre33y44(){

        $resultado = comprobarNota(33);
        $this->assertSame("en Tercera división", $resultado);
        $resultado = comprobarNota(44);
        $this->assertSame("en Tercera división", $resultado);


    }

    public function testEntre45y59(){

        $resultado = comprobarNota(45);
        $this->assertSame("en Segunda división", $resultado);
        $resultado = comprobarNota(59);
        $this->assertSame("en Segunda división", $resultado);
    }


   
}


?>
