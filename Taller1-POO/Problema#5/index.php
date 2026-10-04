<?php
include_once 'Estudiante.php';
include_once 'Docente.php';

// Instancia del Estudiante
$miEstudiante = new Estudiante(
    3.5,            // Índice académico
    2023,           // Cohorte
    1,              // Estado académico (Activo)
    2,              // Modalidad (Virtual)
    "Juan",         // Nombre
    "Pérez",        // Apellido
    "2000-05-15"    // Fecha de nacimiento
);

// Instancia del Docente
$miDocente = new Docente(
    "DOC-8092",               // Código docente
    "Sistemas y Computación", // Departamento
    "Titular",                // Categoría
    "Doctor/PhD",             // Máximo título
    "Tiempo Completo",        // Tipo de contratación
    "Irina",                  // Nombre
    "Fong",                   // Apellido
    "1985-11-20"              // Fecha de nacimiento
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema #5 - Jerarquía de Clases Escolar</title>
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
    <div class="container col-md-10 col-lg-8">
        
        <a href="../index.php" class="btn btn-outline-secondary btn-sm mb-3">&larr; Volver al Menú Principal</a>

        <div class="row g-4">
            <!-- Tarjeta Estudiante -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-3 h-100">
                    <div class="card-header text-white py-3" style="background-color: #0284c7;">
                        <h5 class="card-title mb-0 fw-bold">🎓 Ficha del Estudiante</h5>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Nombre Completo:</span>
                                <strong><?php echo $miEstudiante->getNombre() . ' ' . $miEstudiante->getApellido(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Fecha de Nacimiento:</span>
                                <strong><?php echo $miEstudiante->getFechaNacimiento(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Índice Académico:</span>
                                <strong><?php echo $miEstudiante->getIndiceAcademico(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Cohorte:</span>
                                <strong><?php echo $miEstudiante->getCohorte(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Estado Académico:</span>
                                <span class="badge bg-success"><?php echo $miEstudiante->getEstadoAcademico(); ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Modalidad de Estudio:</span>
                                <span class="badge bg-info text-dark"><?php echo $miEstudiante->getModalidadEstudio(); ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer bg-light text-muted small py-2">
                        Clase: <code>Estudiante</code> &rarr; hereda de <code>Persona</code>
                    </div>
                </div>
            </div>

            <!-- Tarjeta Docente -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0 rounded-3 h-100">
                    <div class="card-header text-white py-3" style="background-color: #16a34a;">
                        <h5 class="card-title mb-0 fw-bold">👨‍🏫 Ficha del Docente</h5>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Docente:</span>
                                <strong><?php echo $miDocente->getNombre() . ' ' . $miDocente->getApellido(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Código Docente:</span>
                                <strong><?php echo $miDocente->getCodigoDocente(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Departamento:</span>
                                <strong><?php echo $miDocente->getDepartamento(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Categoría:</span>
                                <strong><?php echo $miDocente->getCategoria(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Título Máximo:</span>
                                <strong><?php echo $miDocente->getMaximoTitulo(); ?></strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between px-0">
                                <span class="text-muted">Tipo de Contratación:</span>
                                <span class="badge bg-secondary"><?php echo $miDocente->getTipoContratacion(); ?></span>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer bg-light text-muted small py-2">
                        Clase: <code>Docente</code> &rarr; hereda de <code>Persona</code>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>