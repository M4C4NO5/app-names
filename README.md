# App Names

Este proyecto es una aplicación PHP sencilla para guardar nombres en una base de datos MySQL.

## Requisitos

- XAMPP instalado (incluye Apache y MySQL)
- PHP habilitado

## Instalación

1. **Ubicación del proyecto**

   Debes colocar la carpeta del proyecto en la siguiente ruta para que funcione correctamente con XAMPP:

   ```
   /opt/lampp/htdocs/app-names
   ```

   Si tu carpeta se llama diferente, renómbrala a `app-names` o ajusta las rutas según corresponda.

2. **Configuración de la base de datos**

   - Inicia XAMPP y asegúrate de que Apache y MySQL estén en ejecución.
   - Accede a phpMyAdmin (`http://localhost/phpmyadmin`) o usa la consola de MySQL.
   - Crea la base de datos y la tabla ejecutando lo siguiente:

   ```sql
   CREATE DATABASE app_names CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

   USE app_names;

   CREATE TABLE nombres (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       created_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

3. **Configuración de conexión**

   El archivo de conexión a la base de datos se encuentra en `src/db.php`. Por defecto, usa:

   - Host: `localhost`
   - Usuario: `root`
   - Contraseña: (vacía)
   - Base de datos: `app_names`

   Si tu configuración es diferente, edita estos valores en `src/db.php`.

## Uso

1. Accede a la aplicación desde tu navegador:

   ```
   http://localhost/app-names/public/index.php
   ```

2. Ingresa un nombre en el formulario y haz clic en "Enviar" para guardarlo en la base de datos.

---
