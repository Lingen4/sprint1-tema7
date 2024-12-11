<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use function App\comprobarNota;

class notaTest_n1 extends TestCase{



    public function testMenor0Mayor100(): void{

        $resultado = comprobarNota(-1);
        $this->assertSame("Nota no válida", $resultado);
        $resultado = comprobarNota(101);
        $this->assertSame("Nota no válida", $resultado);
    }

    public function testEntre0y33():void{

        
        $resultado=comprobarNota(32);
        $this->assertSame("reprobado", $resultado);
       
    }

    public function testEntre33y44():void{

        $resultado = comprobarNota(33);
        $this->assertSame("en Tercera división", $resultado);
        


    }

    public function testEntre45y59():void{

        $resultado = comprobarNota(45);
        $this->assertSame("en Segunda división", $resultado);
        
    }

    public function testSobre60():void{

        $resultado = comprobarNota(60);
        $this->assertSame("en Primera división", $resultado);
       
    }



}


?>
