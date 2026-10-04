<?php

class Circulo {
    private float $radio;

    public function __construct(float $radio) {
        $this->radio = $radio;
    }

    public function calcularArea(): float {
        return M_PI * ($this->radio * $this->radio);
    }

    public function calcularPerimetro(): float {
        return 2 * M_PI * $this->radio;
    }

    public function getRadio(): float {
        return $this->radio;
    }
}

// Capturamos el radio ingresado por el usuario (o usamos 4 por defecto)
$radioIngresado = isset($_POST['radio']) && is_numeric($_POST['radio']) ? (float)$_POST['radio'] : 4.0;

// Instanciamos el objeto con el radio seleccionado
$miCirculo = new Circulo($radioIngresado);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema #4 - Clase Círculo</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="py-5">
    <div class="container col-md-8 col-lg-6">
        
        <a href="index.php" class="btn btn-outline-secondary btn-sm mb-3">&larr; Volver al Menú</a>

        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header text-white py-3" style="background-color: #4f46e5;">
                <h5 class="card-title mb-0 fw-bold">Problema #4: Clase Círculo (Área y Perímetro)</h5>
            </div>
            <div class="card-body p-4">
                
                <!-- Formulario Interactivo -->
                <form method="POST" action="Problema4.php" class="mb-4">
                    <label for="radio" class="form-label fw-semibold">Ingresa el valor del Radio:</label>
                    <div class="input-group">
                        <input type="number" step="any" min="0.1" name="radio" id="radio" class="form-control" value="<?php echo $miCirculo->getRadio(); ?>" required>
                        <button type="submit" class="btn text-white fw-semibold" style="background-color: #4f46e5;">Calcular</button>
                    </div>
                </form>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="p-3 bg-light border rounded-3 text-center">
                            <h6 class="text-muted small text-uppercase fw-bold mb-2">Área del Círculo</h6>
                            <div class="fs-4 fw-bold text-success">
                                <?php echo number_format($miCirculo->calcularArea(), 2, '.', ','); ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="p-3 bg-light border rounded-3 text-center">
                            <h6 class="text-muted small text-uppercase fw-bold mb-2">Perímetro del Círculo</h6>
                            <div class="fs-4 fw-bold text-info">
                                <?php echo number_format($miCirculo->calcularPerimetro(), 2, '.', ','); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer bg-light text-muted small py-2">
                Programación Orientada a Objetos en PHP.
            </div>
        </div>

    </div>
</body>
</html>
