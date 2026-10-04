# Taller #1 - Programación Orientada a Objetos (POO) en PHP
**Instructor:** Irina Fong  
**Grupo:** 1S3122  

## 🛠️ Tecnología Utilizada
* **PHP 8.x:** Utilizado para la implementación del paradigma de Programación Orientada a Objetos (clases, visibilidad, herencia, resolución estática y constantes).
* **HTML5 & Bootstrap 5.3:** Utilizados para la maquetación responsiva y presentación visual limpia mediante tarjetas interactivas.
* **Google Fonts:** Incorporación de la tipografía *Plus Jakarta Sans* para una interfaz moderna e industrial.
* **WampServer / Apache:** Servidor local utilizado para la ejecución y prueba de los scripts PHP.
* **Git & GitHub:** Control de versiones del proyecto.

## 📋 Información relevante del laboratorio
Durante el **Taller #1 - Programación Orientada a Objetos en PHP** se practicaron los conceptos fundamentales de la POO en lenguaje PHP: herencia de clases, miembros y métodos estáticos, la diferencia entre `self::` y `static::` (Late Static Binding), restricción de herencia con la palabra clave `final`, constantes matemáticas y el modelado jerárquico de entidades del mundo real.

## 🧩 Descripción de los Ejercicios Desarrollados
### 1. Herencia Básica y Sobrescritura (`Problema1.php`)
- Definición de la clase base `Coche` con la propiedad protegida `$color` y métodos getter/setter.
- Creación de la clase derivada `CocheDeLujo` que extiende de `Coche` e incorpora el atributo protegido `$extras`.
- Sobrescritura del método `printCaracteristicas()` en la clase hija para mostrar tanto el color heredado como los extras del vehículo dentro de una tarjeta estructurada con Bootstrap.

### 2. Late Static Binding vs Static Binding (`Problema2.php`)
- Implementación de herencia entre las clases `A` y `B` para comparar la resolución de métodos estáticos.
- Análisis del operador `self::` (resolución en tiempo de compilación referenciando a la clase donde fue escrito el método) frente a `static::` (Late Static Binding, resolución en tiempo de ejecución referenciando a la clase que realiza la llamada).

### 3. Restricción de Herencia (`Problema3.php`)
- Demostración del uso de la palabra reservada `final` antepuesta a la declaración de una clase (`final class Coche`).
- Comprobación del mecanismo de seguridad de PHP, el cual lanza un **Fatal Error** (`Class CocheDeLujo cannot extend final class Coche`) al intentar extender una clase sellada.

### 4. Encapsulamiento y Constantes en Clases (`Problema4.php`)
- Construcción de la clase `Circulo` con el atributo privado `$radio` encapsulado y métodos para calcular el área ($\pi \times r^2$) y el perímetro ($2 \times \pi \times r$).
- Uso de la constante matemática predefinida `M_PI` y formateo numérico con `number_format()`.
- Incorporación de un formulario interactivo con el método `POST` para permitir la entrada dinámica del radio por parte del usuario.

### 5. Sistema Escolar y Modelado Jerárquico (`Problema#5/`)
- **Clase Base (`Persona.php`):** Encapsula los datos universales de una persona (`$nombre`, `$apellido`, `$fechaNacimiento`).
- **Clase Derivada (`Estudiante.php`):** Hereda de `Persona` e incorpora lógica propia del perfil estudiantil (`$indiceAcademico`, `$cohorte`, `$estadoAcademico`, `$modalidadEstudio`).
- **Clase Derivada (`Docente.php`):** Hereda de `Persona` e incorpora atributos del perfil académico/profesoral (`$codigoDocente`, `$departamento`, `$categoria`, `$maximoTitulo`, `$tipoContratacion`).
- **Vista de Pruebas (`Problema#5/index.php`):** Instanciación de los objetos y renderizado de las fichas informativas en tarjetas estilizadas.

## ✅ Cumplimiento de lo solicitado
- Todos los ejercicios fueron probados y ejecutados exitosamente en el servidor web local WampServer.
- Se implementó un panel principal (`index.php`) para facilitar la navegación fluida entre todos los problemas del taller.
- Se aplicó una capa visual consistente usando Bootstrap 5.3 y tipografía moderna en todos los componentes del proyecto.

## 🎯 Conclusión
La realización del taller permitió afianzar el uso práctico de la Programación Orientada a Objetos en PHP, comprendiendo cómo estructurar arquitecturas reutilizables y mantenibles mediante la herencia, el encapsulamiento de datos, el control explícito de extensiones con `final` y la resolución dinámica de referencias estáticas.

## 📁 Estructura del repositorio
```text
Taller1-POO/
├── Problema1.php
├── Problema2.php
├── Problema3.php
├── Problema4.php
├── Problema#5/
│   ├── Persona.php
│   ├── Estudiante.php
│   ├── Docente.php
│   └── index.php
├── index.php
└── README.md
