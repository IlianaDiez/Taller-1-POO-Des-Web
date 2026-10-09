# Laboratorio #3 Include - Formularios HTML5

**Universidad Tecnológica de Panamá** – Facultad de Ingeniería de Sistemas Computacionales
**Módulo III:** Programación de Aplicaciones Web – Desarrollo Web

| | |
|---|---|
| **Instructor** | Irina Fong |
| **Grupo** | 1S3122 |
| **Autor** | Iliana Diez |
| **Fecha** | 9 de octubre de 2026 |

---

## 📋 Detalles del Laboratorio

Se desarrolló un **Sistema Modular de Registro de Aspirantes** sin uso de bases de datos. El proyecto demuestra el manejo seguro de formularios, la subida y validación de archivos multimedia, la normalización de cadenas, el cálculo de fechas y la separación modular de vistas con `include`.

### 1. Arquitectura modular (`includes/header.php` y `includes/footer.php`)
- El encabezado, la navegación, los metadatos, los estilos y el pie de página son componentes reutilizables incluidos con `include`.
- El menú tiene migas de pan (breadcrumbs) dinámicas que detectan la página actual con `basename($_SERVER['PHP_SELF'])`.
- El pie de página genera el año en curso con `date('Y')`.

### 2. Formulario de registro (`index.php`)
- Formulario con tarjetas responsivas de Bootstrap 5.3.
- Usa `enctype="multipart/form-data"` para enviar la fotografía.
- Campos requeridos, con `placeholder`, selector de fecha, botones de opción para el sexo y restricción de extensiones en el campo de archivo.

### 3. Procesamiento y validación (`procesar.php`)
- **Saneamiento:** `trim()`, `strip_tags()` y `htmlspecialchars()` para prevenir XSS.
- **Normalización:** nombre y apellido en formato título (equivalente UTF-8 de `ucwords(strtolower())`, por ejemplo "sofía" → "Sofía") y la identificación en mayúsculas (equivalente UTF-8 de `strtoupper()`).
- **Edad:** se calcula con `DateTime` y `diff()`, y debe estar entre 18 y 70 años. Se rechazan fechas inválidas y futuras.
- **Foto:** solo se aceptan `jpg`, `jpeg`, `png`, `gif` y `webp`, se verifica que el contenido sea una imagen real y que pese máximo 5 MB.
- **Errores:** si algo falla, se muestra una pantalla de alerta con todos los errores y un botón para volver. La foto solo se guarda cuando todo lo demás es válido.

### 4. Almacenamiento seguro de fotografías (`uploaded_files/`)
- El nombre original se limpia y se le antepone una marca de tiempo (`time()`) para evitar colisiones.
- El archivo se mueve con `move_uploaded_file()` y se le asignan permisos `0644`.

### 5. Seguridad de la carpeta (`uploaded_files/.htaccess`)
- `Require all denied` bloquea todo acceso directo desde el navegador a la carpeta (responde **403 Forbidden**).
- `Options -Indexes` desactiva el listado de archivos.
- Como el navegador no puede pedir las fotos directamente, `procesar.php` las lee en el servidor y las incrusta en la página con `base64`.

---

## 🛠️ Tecnologías y Versiones

| Tecnología | Versión | Uso |
|---|---|---|
| PHP | `[COMPLETAR: resultado de php -v]` | Lógica del servidor, validación y subida de archivos |
| Apache | `[COMPLETAR]` | Servidor web y reglas `.htaccess` |
| WampServer | `[COMPLETAR]` | Entorno local de ejecución |
| HTML5 | – | Maquetación semántica |
| Bootstrap | 5.3.8 | Diseño responsivo |
| Bootstrap Icons | 1.11.3 | Iconografía |
| Google Fonts | Plus Jakarta Sans | Tipografía |
| Git y GitHub | – | Control de versiones |

---

## 🎛️ Controles Utilizados

| Control | Tipo / atributo | Campo |
|---|---|---|
| Cuadro de texto | `input type="text"`, `required`, `placeholder` | Nombre, apellido, identificación |
| Selector de fecha | `input type="date"`, `required` | Fecha de nacimiento |
| Botones de opción | `input type="radio"` con estilo Bootstrap | Sexo |
| Carga de archivo | `input type="file"`, extensiones restringidas | Fotografía del aspirante |
| Botón de envío | `button type="submit"` | Registrar Aspirante |

![Formulario vacío](img/lab3-01-formulario-vacio.png)

---

## ⚙️ Proceso de Instalación

1. Instalar **WampServer** y comprobar que el icono esté en verde.
2. Clonar el repositorio:
   ```bash
   git clone https://github.com/IlianaDiez/Lab3-Include.git
   ```
3. Copiar la carpeta `TallerAspirantes` dentro de `C:\wamp64\www\`.
4. Verificar que Apache tenga habilitado `AllowOverride All` para que se lea el `.htaccess`.
5. Abrir en el navegador: `http://localhost/TallerAspirantes/index.php`

![WampServer en verde y proyecto en localhost](img/lab3-08-instalacion.png)

---

## 🖼️ Evidencias

### Insertar registros
Formulario completado:

<img width="931" height="865" alt="Captura de pantalla 2026-10-09 094602" src="https://github.com/user-attachments/assets/418b576f-9627-4c3b-9c1a-61b7c7826685" />


Resultado del registro exitoso:

<img width="1028" height="626" alt="Captura de pantalla 2026-10-09 094614" src="https://github.com/user-attachments/assets/aa1408ae-fc2b-417a-a0c9-5fa7502a0f8f" />


### Validaciones
Edad fuera del rango permitido:

<img width="1640" height="572" alt="Captura de pantalla 2026-10-09 094754" src="https://github.com/user-attachments/assets/1fa964a6-0d56-4097-9d39-5b6614774a3c" />


Formato de imagen no permitido:
<img width="1002" height="617" alt="Captura de pantalla 2026-10-09 100100" src="https://github.com/user-attachments/assets/5c785377-6994-482e-8d8b-ba728c6e0d22" />


### Almacenamiento y seguridad de la carpeta
Fotografías guardadas con marca de tiempo en `uploaded_files/`:
<img width="1860" height="987" alt="Captura de pantalla 2026-10-09 095055" src="https://github.com/user-attachments/assets/0bbb0532-1d39-4a37-ac44-596226fb9462" />



Regla `.htaccess` aplicada:

<img width="1212" height="598" alt="Captura de pantalla 2026-10-09 095038" src="https://github.com/user-attachments/assets/e0b4d137-1345-4003-ae67-c01cb25d9cec" />


Acceso directo bloqueado desde el navegador (403 Forbidden):
<img width="763" height="616" alt="Captura de pantalla 2026-10-09 100503" src="https://github.com/user-attachments/assets/d0bc0fdb-c042-4edd-824e-1106c237b7ac" />


## 📁 Estructura del repositorio

```
Lab3-Include/
└── TallerAspirantes/
    ├── includes/
    │   ├── header.php
    │   └── footer.php
    ├── uploaded_files/
    │   └── .htaccess
    ├── img/
    ├── index.php
    ├── procesar.php
    └── README.md
```

---

## 🎯 Conclusión

El laboratorio permitió reforzar PHP y HTML5 mediante un sistema modular que valida entradas, calcula fechas, sube archivos de forma controlada y protege la carpeta de cargas con `.htaccess`.

---

## 📚 Referencias

- Material del curso de Desarrollo Web, Ing. Irina Fong (Laboratorio #3, Include y formularios).
- Manual de PHP: https://www.php.net/manual/es/
- Documentación de Bootstrap 5.3: https://getbootstrap.com/docs/5.3/
- Documentación de Apache 2.4 (`Require`): https://httpd.apache.org/docs/2.4/
