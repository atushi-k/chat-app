FROM php:8.2-fpm

# 必要な拡張を追加
RUN apt-get update && apt-get install -y \
    zip unzip curl libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN curl -sS https://getcomposer.org/installer | php && \
mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html