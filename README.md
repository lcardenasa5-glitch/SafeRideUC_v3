# SafeRideUC v2

Aplicacion web de movilidad universitaria para la Universidad Central.

---

## Tecnologias
- PHP (cualquier version 7.4+)
- SQLite (base de datos incluida — no necesitas instalar nada)
- HTML / CSS / JavaScript

---

## Como abrir la aplicacion (paso a paso)

### Requisito unico: tener PHP instalado

1. Descarga PHP desde https://windows.php.net/download/
   - Elige la version "Thread Safe" de 64 bits, descomprime en C:\php
   - Agrega C:\php a las variables de entorno PATH
   - Para verificar: abre CMD y escribe `php -v`

### Iniciar la app

2. Descomprime la carpeta SafeRideUC donde quieras (ej: Escritorio)
3. Haz doble clic en `start_saferideuc.bat`
4. Se abre el navegador en http://localhost:8000 automaticamente
5. La base de datos (saferideuc.db) se crea sola en la carpeta database/

### Usuario de prueba incluido
- Correo:    jpulido4@ucentral.edu.co
- Password:  Test1234!
- Rol:       Conductor

---

## Que hace la app

- Login con correo institucional @ucentral.edu.co
- Registro de usuarios (pasajero o conductor)
- Conductores pueden publicar viajes con origen, destino, cupos y precio
- Pasajeros ven los viajes disponibles en tiempo real
- Monitor de ruta simulado con animacion
- Base de datos SQLite persistente (los datos se guardan entre sesiones)

---

## Estructura del proyecto

```
SafeRideUC/
  app/
    config.php          <- configuracion (SQLite)
    controllers/
      AuthController.php  <- login, registro, logout
      RideController.php  <- viajes (lista, crear, API JSON)
    models/
      DB.php              <- conexion SQLite + creacion automatica de tablas
      User.php            <- modelo de usuario
      Vehicle.php         <- modelo de vehiculo
    views/
      login.php / register.php / dashboard.php
  database/
    schema.sql            <- referencia del esquema
    saferideuc.db         <- archivo de base de datos (se crea automaticamente)
  public/
    css/ js/ img/
  index.php               <- punto de entrada
  start_saferideuc.bat    <- arranque con un doble clic
```
