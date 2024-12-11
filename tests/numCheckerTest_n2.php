<?php
//require_once dirname(__DIR__). '/vendor/autoload.php';

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class numCheckerTest_n2 extends TestCase
{

    public static function imparPos():array{
        
        $checker1 = new NumberChecker (1);
        $checker2 = new NumberChecker (3);
        
        
        return[[$checker1],[$checker2]];
    }
    
    public static function imparNeg():array{
        
        $checker1 = new NumberChecker (-1);
        $checker2 = new NumberChecker (-3);
        
        
        return[[$checker1],[$checker2]];
    }
    
    public static function parPos():array{
        
        $checker1 = new NumberChecker (2);
        $checker2 = new NumberChecker (4);
        
        
        return[[$checker1],[$checker2]];
    }
    
    public static function parNeg():array{
        
        
        $checker1 = new NumberChecker (-2);
        $checker2 = new NumberChecker (-4);
        $checker3 = new NumberChecker (0);
        
        return[[$checker1],[$checker2],[$checker3]];
    }


    
    #[\PHPUnit\Framework\Attributes\DataProvider('imparPos')]
public function testImparPositivo(NumberChecker $checker){
    $this->assertFalse($checker->isEven(), "Error al validar que es impar");
    $this->assertTrue($checker->isPositive(), "Error al validar que es positivo");
}
#[\PHPUnit\Framework\Attributes\DataProvider('imparNeg')]

public function testImparNegativo(NumberChecker $checker){
    $this->assertFalse($checker->isEven(), "Error al validar que es impar");
    $this->assertFalse($checker->isPositive(), "Error al validar que es negativo");
}
#[\PHPUnit\Framework\Attributes\DataProvider('parPos')]
public function testParPositivo(NumberChecker $checker){
    $this->assertTrue($checker->isEven(), "Error al validar que es par");
    $this->assertTrue($checker->isPositive(), "Error al validar que es positivo");
}
#[\PHPUnit\Framework\Attributes\DataProvider('parNeg')]
public function testParNegativo(NumberChecker $checker){
    $this->assertTrue($checker->isEven(), "Error al validar que es par");
    $this->assertFalse($checker->isPositive(), "Error al validar que es negativo");
}

    
   
}
