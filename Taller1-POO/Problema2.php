<?php

// --- CASO 1: Con static:: (Late Static Binding) ---
class A {
    public static function miFuncion() {
        return __CLASS__;
    }

    public static function otraFuncion() {
        return static::miFuncion(); // Resuelve la clase llamada en tiempo de ejecución
    }
}

class B extends A {
    public static function miFuncion() {
        return __CLASS__;
    }
}

// --- CASO 2: Con self:: ---
class A_Self {
    public static function miFuncion() {
        return __CLASS__;
    }

    public static function otraFuncion() {
        return self::miFuncion(); // Resuelve la clase donde fue definido el método
    }
}

class B_Self extends A_Self {
    public static function miFuncion() {
        return __CLASS__;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema #2 - Late Static Binding</title>
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
    <div class="container col-md-8 col-lg-7">
        
        <a href="index.php" class="btn btn-outline-secondary btn-sm mb-3">&larr; Volver al Menú</a>

        <div class="card shadow-sm border-0 rounded-3 mb-4">
            <div class="card-header text-white py-3" style="background-color: #4f46e5;">
                <h5 class="card-title mb-0 fw-bold">Problema #2: Late Static Binding (`static::` vs `self::`)</h5>
            </div>
            <div class="card-body p-4">
                
                <div class="row g-4">
                    <!-- Prueba con static:: -->
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <h6 class="fw-bold text-primary mb-2">1. Uso de <code>static::</code></h6>
                            <p class="small text-muted mb-2">Llamando a <code>B::otraFuncion()</code>:</p>
                            <div class="alert alert-primary mb-0 fw-semibold text-center">
                                Clase devuelta: <?php echo B::otraFuncion(); ?>
                            </div>
                            <small class="d-block text-muted mt-2">
                                ✅ Enlaza en tiempo de ejecución a la clase hija (<code>B</code>).
                            </small>
                        </div>
                    </div>

                    <!-- Prueba con self:: -->
                    <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light h-100">
                            <h6 class="fw-bold text-secondary mb-2">2. Uso de <code>self::</code></h6>
                            <p class="small text-muted mb-2">Llamando a <code>B_Self::otraFuncion()</code>:</p>
                            <div class="alert alert-secondary mb-0 fw-semibold text-center">
                                Clase devuelta: <?php echo B_Self::otraFuncion(); ?>
                            </div>
                            <small class="d-block text-muted mt-2">
                                🔒 Enlaza estáticamente a la clase contenedora (<code>A_Self</code>).
                            </small>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer bg-light text-muted small py-2">
                Demostración de resolución estática en tiempo de ejecución en PHP.
            </div>
        </div>

    </div>
</body>
</html>