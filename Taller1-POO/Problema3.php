<?php

// Definimos la clase como final para impedir que sea heredada
final class Coche {
    public function getColor() {
        return "Rojo";
    }
}

// Intentamos heredar de la clase 'final'
try {
    // Si PHP intenta evaluar o compilar esta herencia, arrojará un Error
    class CocheDeLujo extends Coche {
        // Esto provocará un Error Fatal
    }
} catch (Throwable $e) {
    echo "<strong>Error capturado exitosamente:</strong> " . $e->getMessage();
}

/* 
 EXPLICACIÓN PARA EL LABORATORIO:
 La palabra reservada 'final' antes de 'class Coche' le indica a PHP 
 que esta clase es definitiva y NO puede tener clases hijas (herencia).
 Al intentar hacer 'class CocheDeLujo extends Coche', PHP genera un 
 Fatal Error deteniendo la ejecución.
*/