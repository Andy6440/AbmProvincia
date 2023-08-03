# Proyecto ABM Provincias y Ciudades
## Descripción
Este proyecto es una aplicación Laravel para gestionar provincias y listar ciudades.
## Herramientas Utilizadas
- Laravel: Framework de PHP para el desarrollo de aplicaciones web.
- MySQL: Base de datos relacional para almacenar los datos del proyecto.
- Nginx: Servidor web utilizado para servir la aplicación Laravel.
- Docker: Plataforma para crear, gestionar y desplegar contenedores.

## Requisitos
- Docker y Docker Compose instalados en tu máquina.

## Instrucciones para Ejecutar el Proyecto

1. Clonar el Repositorio

2. Configurar el archivo .env
- Crear una copia del archivo `.env.example` y renombrarla a `.env`.
- Actualizar las variables de entorno en el archivo `.env` según tus preferencias.

2. Intalar dependecias
- Ejecuta los siguientes comandos `composer install` y  `npm install`.
3. Construir las Imágenes de Docker con `docker-compose --build`
Este comando construirá las imágenes de los servicios definidos en el archivo `docker-compose.yml` basándose en los Dockerfiles proporcionados.

4. Iniciar los Contenedores con  `docker-compose up`
Este comando iniciará los servicios en contenedores basados en las imágenes previamente construidas. La aplicación Laravel estará disponible en `http://localhost:8081` y phpMyAdmin en `http://localhost:8080`.

5. Ejecutar migraciones
Para ejecutar las migraciones, primero debes acceder al contenedor de la aplicación:
```bash
docker exec -it id-contenedor bash
```
Por favor, reemplaza `id-contenedor` con el ID de tu contenedor de Docker. Puedes obtener el ID de tu contenedor con el comando `docker ps`.

Una vez dentro del contenedor, puedes ejecutar las migraciones con:
```bash
php artisan migrate
```
Si experimentas un error de "Connection refused", espera 1-2 minutos para que el contenedor termine de inicializarse y luego intenta nuevamente.

6. Ejecución de seeders
Para ejecutar los seeders, sigue los mismos pasos que para las migraciones, pero utiliza el comando db:seed:
```bash
php artisan db:seed
```

## Documentación de la API

La documentación de la API se encontrara disponible en `http://localhost:81/api/documentation`.

# Comandos de Artisan
## Crear Ciudad

Para crear una ciudad, utiliza el comando create:city dentro den contenedor con los argumentos nombreCiudad y nombreProvincia. Por ejemplo:
```bash
docker exec -it id-contenedor bash
php artisan create:city "Nombre de la Ciudad" "Nombre de la Provincia"
```
Este comando creará una nueva ciudad con el nombre y la provincia proporcionados.




