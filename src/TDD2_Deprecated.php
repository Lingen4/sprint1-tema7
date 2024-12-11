<?php

namespace App;


class TDD2_Deprecated{

    protected $nota;


public function comprobarNota(int|float $nota): string
{

    if ($nota<0 || $nota>100){
        return "Nota no válida";
    }
        else if ($nota < 33) {
        return "reprobado";
    } else if ($nota <= 44) {
        return "en Tercera división";
    } else if ($nota <= 59) {
        return "en Segunda división";
    } else {
        return "en Primera división";
    }
}
}
