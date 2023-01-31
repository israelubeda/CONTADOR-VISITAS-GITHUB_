# Contador Visitas GitHub 

Contador de visitas para tu Página Web, perfil de GitHub o Repositorios. 

<img src="https://img.shields.io/badge/LICENCIA-MIT-yellow?style=for-the-badge&logo=git&logoColor=white" alt="licencia" />

# Demo

<a href="https://github.com/KeyCuevasMelgarejo/KeyCuevasMelgarejo">
    <img alt="Si la etiqueta no se ve, dale F5 actualizar la página" title="Visitas Perfil GitHub" src="https://contador-visitas-github.vercel.app/"/></a>

# Uso
### 1. Dale Fork a este repositorio
<a href="https://github.com/KeyCuevasMelgarejo/CONTADOR-VISITAS-GITHUB_/fork">
    <img alt="Folk" title="Fork Button" src="https://shields.io/badge/-DAR%20FORK-red.svg?&style=for-the-badge&logo=github&logoColor=white"/></a>

### 2. Crea tu base de datos
Puedes usar cualquier base de datos remota. Ingresa sus credenciales en el archivo conexion.php:
```bash
<?php
    $hostname_db = "hostname_db";
    $database_db = "database_db";
    $username_db = "username_db";
    $password_db = "password_db";
```
En el caso que no tengas una BD remota, puedes usar la que yo utilizo [PlanetScale](https://planetscale.com/). Para crear tu BD alli, debes hacer lo siguiente:
```bash
# Create una cuenta.
# Ve a la pestaña Overview y dale clic en New Database. Le pones un nombre a tu base de datos y le das clic en el botón 'Create database'.
# Para ver las credenciales ve a Overview y dale clic en el botón 'Connect'. En 'Connect with' elige la opcion general.
# Dale clic en el botón 'New password' y tendrás las credenciales que reemplazarás en el $hostname_db, $database_db, $username_db y $password_db
```

### 3. Crea la tabla 'visitas' con los campos 'id' y 'github_contador_visitas' en tu BD remota
En el caso que uses [PlanetScale](https://planetscale.com/), sigue los siguientes pasos:
```bash
# Ve a la opción Console. 
# En código SQL, seleccionas la base de datos escribiendo [ use TU_DATABASE; ]        (TOMA EN CUENTA EL PUNTO Y COMA)
# En código SQL, creas la tabla [ CREATE TABLE 'visitas' (id INT, github_contador_visitas INT); ]        (TOMA EN CUENTA EL PUNTO Y COMA)
```
Ya casi esta lista tu aplicación!

### 4. Despliega tu aplicación en Vercel en 4 pasos
Puedes enlazar [Vercel](https://vercel.com/) con el fork que hiciste de este proyecto o seguir los siguientes pasos:
```bash
# Create una cuenta (esta demás mencionar que debes crearla enlazando con tu cuenta de GitHub).
# Seleccionas en 'Add New' y eliges las opción 'Project'. 
# Importas el repositorio de git.
# Por último, sin modificar ningunas de las configuraciones que te salen por defecto, le das clic al botón 'Deploy App'.
```

Listo!

# Nota
Con las modificaciones necesarias en PlanetScale, puedes incluir branches para añadir la funcionalidad de visitas para uno o más repositorios. Explota tu creatividad!

## Participa
<p align="left">
  <a href="https://github.com/KeyCuevasMelgarejo/CONTADOR-VISITAS-GITHUB_/subscription">
    <img alt="Follow" title="Dale Me Gusta" src="https://shields.io/badge/-LIKE%20THIS%20REPO-informational.svg?&style=for-the-badge&logo=github&logoColor=white"/></a>
  <a href="https://github.com/KeyCuevasMelgarejo/CONTADOR-VISITAS-GITHUB_/issues/new">
    <img alt="Reportar problema" title="Ayudemos a mejorar" src="https://shields.io/badge/-REPORTA%20UN%20PROBLEMA-yellow.svg?&style=for-the-badge&logo=github&logoColor=white"/></a>
  <a href="https://ko-fi.com/keycuevasmelgarejo"><img alt="Ko-fi" title="Contribuye" src="https://shields.io/badge/-BUY%20ME%20A%20COFFEE-CC2735.svg?&style=for-the-badge&logo=ko-fi&logoColor=white"></a>
</p>
