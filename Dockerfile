FROM php:8.0-apache

COPY . /var/www/html
RUN apt-get update
RUN apt-get -y install vim

EXPOSE 80


