FROM php:8.2-fpm

WORKDIR /var/www/html

# Instalar dependencias requeridas y la extensión pdo_mysql
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_mysql

# Cambiar el propietario de los archivos a www-data
RUN chown -R www-data:www-data /var/www/html

# Cambiar al usuario www-data
USER www-data

RUN php -m | grep -q 'pdo_mysql'
