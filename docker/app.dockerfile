FROM php:8.2-fpm-alpine

# https://getcomposer.org/doc/03-cli.md#composer-allow-superuser
ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /var/www/app/

RUN apk add --no-cache \
  bash \
  curl \
  libpng-dev \
  libpng \
  libjpeg \
  && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer \
  && rm -rf /var/cache/apk/*

RUN docker-php-ext-configure gd && docker-php-ext-install pdo_mysql
