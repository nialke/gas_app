FROM php:8.1-apache

COPY . /var/www/html

RUN apt-get update && \
    apt-get install -y git unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80

database:
    image: postgres:${POSTGRES_VERSION:-14}-alpine
    environment:
        POSTGRES_DB: ${POSTGRES_DB:-app}
        POSTGRES_PASSWORD: ${POSTGRES_PASSWORD:-Pass123}
        POSTGRES_USER: ${POSTGRES_USER:-app}
volumes:
    - db-data:/var/lib/postgresql/data:rw