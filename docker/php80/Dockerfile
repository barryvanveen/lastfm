FROM composer:2 AS composer
FROM php:8.0-cli-bullseye

WORKDIR /app

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

RUN apt-get update \
    && apt-get install -y curl git libzip-dev unzip zip

RUN docker-php-ext-install zip

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug;

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
