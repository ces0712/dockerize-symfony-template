FROM php:7.1-fpm

# Install recommended extensions for Symfony
RUN apt-get update && apt-get install -y \  
        libicu-dev \
    && docker-php-ext-install \
        intl \
        opcache \
        pdo \ 
        pdo_mysql \
    && docker-php-ext-enable \
        intl \
        opcache

RUN useradd -ms /bin/bash devUser
 
USER devUser

# Permission fix
# RUN usermod -u 1000 www-data  

WORKDIR /app

