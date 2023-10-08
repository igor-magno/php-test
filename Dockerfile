FROM php:7.4.0-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install -y libxml2-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && apt-get install -y git

COPY . .

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN composer config github-oauth.github.com GITHUB_TOKEN

RUN composer install --no-dev --no-interaction --no-progress --optimize-autoloader --no-scripts
