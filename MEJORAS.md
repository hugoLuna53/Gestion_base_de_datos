# Mejoras aplicadas al proyecto InsertaAlumno

## 1. Mejora visual
- Se añadió un archivo `styles.css`.
- Diseño más moderno y profesional.
- Formularios centrados y más legibles.

## 2. Seguridad SQL
### Antes
Las consultas usaban variables directamente en SQL.

### Ahora
Se implementaron `prepared statements` con `mysqli_prepare`.

### Beneficio
- Evita ataques SQL Injection.
- Código más seguro.

## 3. Validación de datos
- Verificación de campos vacíos.
- Validación correcta de emails.
- Conversión segura de IDs numéricos.

## 4. Reutilización del código
Se creó `db.php` para centralizar la conexión a la base de datos.

### Beneficio
- Menos código repetido.
- Más fácil de mantener.

## 5. Mejora en búsquedas
La búsqueda ahora utiliza `LIKE`.

### Beneficio
Permite buscar coincidencias parciales.

## 6. Mejor experiencia de usuario
- Mensajes de éxito y error.
- Navegación más clara.
- Botones y enlaces organizados.

## 7. Código más profesional
- Variables más limpias.
- Estructura HTML corregida.
- Mejor organización general del proyecto.
