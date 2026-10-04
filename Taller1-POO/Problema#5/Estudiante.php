<?php
include_once 'Persona.php';

class Estudiante extends Persona {
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico; // 1 = Activo, 0 = Inactivo, 2 = Retirado, 3 = Graduado
    protected int $modalidadEstudio; // 1 = Presencial, 2 = Virtual, 3 = Híbrida

    public function __construct(
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getIndiceAcademico(): float {
        return $this->indiceAcademico;
    }

    public function getCohorte(): int {
        return $this->cohorte;
    }

    public function getEstadoAcademico(): string {
        $estados = [0 => 'Inactivo', 1 => 'Activo', 2 => 'Retirado', 3 => 'Graduado'];
        return $estados[$this->estadoAcademico] ?? 'Desconocido';
    }

    public function getModalidadEstudio(): string {
        $modalidades = [1 => 'Presencial', 2 => 'Virtual', 3 => 'Híbrida'];
        return $modalidades[$this->modalidadEstudio] ?? 'Desconocida';
    }
}