<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use function App\comprobarNota;

class notasTest_n1 extends TestCase{


    public function testMenor33():void{

        $resultado=comprobarNota(32);
        $this->assertSame("reprobado", $resultado);
        $resultado=comprobarNota(33);
        $this->assertNotSame("reprobado", $resultado);
    }

    public function testEntre33y44(){

        $resultado = comprobarNota(33);
        $this->assertSame("en Tercera división", $resultado);
        $resultado = comprobarNota(45);
        $this->assertNotSame("en Tercera división", $resultado);


    }

    public function testEntre45y59(){

        $resultado = comprobarNota(45);
        $this->assertSame("en Segunda división", $resultado);
        $resultado = comprobarNota(60);
        $this->assertNotSame("en Segunda división", $resultado);
    }

    public function testSobre60(){

        $resultado = comprobarNota(60);
        $this->assertSame("en Primera división", $resultado);
        $resultado = comprobarNota(100);
        $this->assertSame("en Primera división", $resultado);
    }



}


?>
