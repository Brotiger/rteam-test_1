FROM php:7.4-cli

RUN apt-get update

RUN apt-get install -y \
    libzip-dev

RUN  docker-php-ext-install \
    zip

WORKDIR /var/www

COPY ./ ./

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install --no-interaction --optimize-autoloader