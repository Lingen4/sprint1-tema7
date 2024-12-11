<?php

namespace App;


class NotaN2 {

    
public function __construct(private int $nota){}

public function setNum($num){
    $this->nota = $num;
}

public function comprobarNota(): string
{
    $nota1 = $this->nota;

    if ($nota1<0 || $nota1 >100){
        return "Nota no válida";
    }
    else if ($nota1 < 33) {
        return "reprobado";
    } else if ($nota1 <= 44) {
        return "en Tercera división";
    } else if ($nota1 <= 59) {
        return "en Segunda división";
    } else {
        return "en Primera división";
    }
}
}
