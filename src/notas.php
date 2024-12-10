<?php

namespace App;

do {
    $nota = readline("Escribe tu nota: ");
} while ($nota < 0 || $nota > 100);

   

function comprobarNota(int|float $nota): string
{

    if ($nota < 33) {
        return "reprobado";
    } else if ($nota <= 44) {
        return "en Tercera división";
    } else if ($nota <= 59) {
        return "en Segunda división";
    } else {
        return "en Primera división";
    }
}


$mensaje = comprobarNota($nota);
echo  "Estás $nota";
