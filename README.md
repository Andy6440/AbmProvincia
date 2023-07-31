# AbmProvincia
## Descripción
abm de provincia
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

3. Construir las Imágenes de Docker con `docker-compose --build`
Este comando construirá las imágenes de los servicios definidos en el archivo `docker-compose.yml` basándose en los Dockerfiles proporcionados.

4. Iniciar los Contenedores con  `docker-compose up`
Este comando iniciará los servicios en contenedores basados en las imágenes previamente construidas. La aplicación Laravel estará disponible en `http://localhost:8081` y phpMyAdmin en `http://localhost:8080`.

5. Detener los Servicios
Para detener los servicios y eliminar los contenedores, puedes utilizar el siguiente comando:  `docker-compose down --remove-orphans`



