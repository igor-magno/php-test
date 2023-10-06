FROM php:7.4.0-apache

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install -y libxml2-dev
