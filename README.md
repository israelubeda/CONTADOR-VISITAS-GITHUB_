# Contador Visitas GitHub - Descripcion

Contador de visitas a tu pagina web, perfil de GitHub y/o con las modificaciones necesarias al script puedes incluirlo a uno o más repositorios individualmente (explicacion al final de este documento).

# Contador Visitas GitHub - Demo

<img title="visitas" src="https://github-contador-visitas.herokuapp.com">

# Uso
## 1. Dale Fork a este repositorio
[fork my repository](https://github.com/user/repository/fork)

## 3. Crea tu base de datos
Puedes usar cualquier base de datos remota. Ingresa las credenciales en el archivo conexion.php:
```bash
<?php
    $hostname_db = "hostname_db";
    $database_db = "database_db";
    $username_db = "username_db";
    $password_db = "password_db";
```
En el caso que no tengas una BD remota, puedes usar la que yo utilizo [RemoteMySql](https://remotemysql.com). Para crear tu BD alli, debes hacer lo siguiente:
```bash
# Create una cuenta
# Ingresa a tu cuenta
# Ve a la pestaña databases
# Dale clic a Create New Database (para que te aparezca el botón, primero debes contestar una super pequeña encuesta).
# Te va a salir un div con un mensaje acerca de las credenciales de tu BD creada, ANÓTALA porque despues desaparece.
# Ingresa las credenciales en el archivo conexion.php
```

## 2. Deploy to heroku

Si deseas incluir esta etiqueta en tu repositorio, da click al siguiente botón y despliegalo en Heroku!

<a href="https://heroku.com/deploy?template=https://github.com/KeyCuevasMelgarejo/CONTADOR-VISITAS-GITHUB/tree/master">
  <img src="https://www.herokucdn.com/deploy/button.svg" alt="Deploy">
</a>
