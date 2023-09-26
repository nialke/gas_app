FROM php:8.1-apache

COPY . /var/www/html

RUN apt-get update && apt-get install -y git unzip libpq-dev && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    docker-php-ext-install pdo pdo_pgsql


RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80