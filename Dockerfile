FROM php:8.2-fpm

WORKDIR /var/www/html

# Instalar dependencias requeridas y la extensión pdo_mysql
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_mysql


