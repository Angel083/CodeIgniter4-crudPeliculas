# Sitio peliculas
Siguiendo un curso en Udemy, comienzo un proyecto para la creación de un CRUD básico

## Tecnologías usadas
- php 7.4.33v
- apache 2.4v
- HTML
- CSS
- CodeIgniter 4v
### Librerías usadas

## Requerimientos
- Tener instalado Docker y docker-compose (si has instalado Docker Desktop para el caso de Windows y Mac, no tendrás inconvenientes porque ambos vienen instalados, si usas alguna distribución de Linux tendrás que investigar más a fondo).

## Creación del proyecto
- Descarga el proyecto de manera local
- Abre el proyecto con tu editor de código favorito (a titulo personal uso VSC) o abre un bash en la dirección que se encuentre el proyecto
- La primera vez tendrás que usar el siguiente comando y esperar a que terminen de descargarse todos los paquetes, siempre que se quiera usar la terminal
  ```Docker
    docker compose up -d
  ```
   
- Si no es la primera vez usa el mismo comando pero agregando la flag (bandera, aunque tambien se le podría decir propiedad) *--build*, este comando lo que hace es recrear la imagen con los nuevos cambios que se hayan hecho en el Dockerfile o el docker-compose
  ```Docker
    docker compose up -d --build
  ```
- Al terminar tendrás que ejecutar el comando que aparece a continuación, su objetivo es instalar los paquetes de composer que es el gestor de paquetes para PHP, recuerda que es la misma terminal y espera a que termine.
  ```Docker
    docker compose exec web composer update
  ```
- Listo, tendrás el proyecto en un contenedor de docker, lo que facilitará instalarlo en cualquier computadora y S.O que tenga docker.
