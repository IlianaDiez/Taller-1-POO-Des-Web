<?php

class Coche {
    protected $color;

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }

    public function printCaracteristicas() {
        echo 'Color: ' . $this->getColor();
    }
}

class CocheDeLujo extends Coche {
    protected $extras;

    public function setExtras($extras) {
        $this->extras = $extras;
    }

    public function getExtras() {
        return $this->extras;
    }

    public function printCaracteristicas() {
        echo '<div class="mb-2"><strong>Color:</strong> ' . $this->color . '</div>';
        echo '<hr class="my-2"/>';
        echo '<div><strong>Extras:</strong> ' . $this->extras . '</div>';
    }
}

// Instanciación y uso de la clase
$miCoche = new CocheDeLujo();
$miCoche->setColor('Negro');
$miCoche->setExtras('TV');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema #1 - Herencia en PHP</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font Plus Jakarta Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="py-5">
    <div class="container col-md-6 col-lg-5">
        
        <a href="index.php" class="btn btn-outline-secondary btn-sm mb-3">&larr; Volver al Menú</a>

        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header text-white py-3" style="background-color: #4f46e5;">
                <h5 class="card-title mb-0 fw-bold">Problema #1: Herencia Básica</h5>
            </div>
            <div class="card-body p-4">
                <h6 class="text-muted small text-uppercase fw-bold mb-3">Características del Coche de Lujo:</h6>
                <div class="p-3 bg-light rounded-3 border">
                    <?php 
                        // Ejecución del método solicitado
                        $miCoche->printCaracteristicas(); 
                    ?>
                </div>
            </div>
            <div class="card-footer bg-light text-muted small py-2">
                Clases involucradas: <code>Coche</code> &rarr; <code>CocheDeLujo</code>
            </div>
        </div>

    </div>
</body>
</html>