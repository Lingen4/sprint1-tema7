<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

use App\NotaN2;


class notaTest_n2 extends TestCase{


    public static function outOfBounds():array{
        $nota1 = new NotaN2 (-1);
        $nota2 = new NotaN2 (101);
        
        return[[$nota1],[$nota2]];
    }

    public static function reprobado():array{
        $nota1= new NotaN2 (0);
        $nota2= new NotaN2 (20);
        $nota3= new NotaN2 (32);

        return[[$nota1],[$nota2],[$nota3]];
    }

    public static function tercera():array{
        $nota1= new NotaN2 (33);
        $nota2= new NotaN2 (39);
        $nota3= new NotaN2 (44);

        return[[$nota1],[$nota2],[$nota3]];
    }

    public static function segunda():array{
        $nota1= new NotaN2 (45);
        $nota2= new NotaN2 (54);
        $nota3= new NotaN2 (59);

        return[[$nota1],[$nota2],[$nota3]];
    }

    
    public static function primera():array{
        $nota1= new NotaN2 (60);
        $nota2= new NotaN2 (80);
        $nota3= new NotaN2 (100);

        return[[$nota1],[$nota2],[$nota3]];
    }

#[\PHPUnit\Framework\Attributes\DataProvider('outOfBounds')]
public function testNotValid (NotaN2 $nota){
    $this->assertSame($nota->comprobarNota(), "Nota no válida");
}

#[\PHPUnit\Framework\Attributes\DataProvider('reprobado')]
public function testReprobado (NotaN2 $nota){

$this->assertSame($nota->comprobarNota(), "reprobado");}

#[\PHPUnit\Framework\Attributes\DataProvider('tercera')]
public function testTercera (NotaN2 $nota){

$this->assertSame($nota->comprobarNota(), "en Tercera división");}


#[\PHPUnit\Framework\Attributes\DataProvider('segunda')]
public function testSegunda (NotaN2 $nota){

$this->assertSame($nota->comprobarNota(), "en Segunda división");}

#[\PHPUnit\Framework\Attributes\DataProvider('primera')]
public function testPrimera (NotaN2 $nota){

$this->assertSame($nota->comprobarNota(), "en Primera división");}



}
