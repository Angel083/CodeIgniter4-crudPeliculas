# Se instala la versión 20 de ubuntu
FROM php:7.4.33-apache
# Se actualizan los paquetes
RUN apt-get update
# RUN apt-get install software-properties-common dirmngr gnupg2 -y
# Se instalar librearías extras necesarias
RUN apt install libicu-dev -y
RUN apt-get install libcurl4-openssl-dev -y
RUN apt-get install libxml2-dev -y
RUN apt install curl -y
RUN apt-get install unzip
# Se instala las extensiones de docker
RUN docker-php-ext-install json
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install intl
RUN docker-php-ext-install curl
RUN docker-php-ext-install xml
RUN docker-php-ext-install xmlrpc
RUN apt-get install unzip
# Se copian los archivos del composer para el proyecto
# COPY ./www/composer.json /var/www/html/composer.json
# COPY ./www/composer.lock /var/www/html/composer.lock
# Solucion al error Apache docker container - Invalid command 'RewriteEngine'
RUN a2enmod rewrite
# Permisos de superusuario para hacer uso del composer
ENV COMPOSER_ALLOW_SUPERUSER=1
# Descarga de composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer
RUN apt-get install vim -y
RUN apt-get install nano
# RUN composer update
# RUN composer install
# CMD composer update

# RUN if command -v a2enmod >/dev/null 2>&1; then \
#         a2enmod rewrite headers \
#     ;fi
# RUN apt-get install apt-transport-https wget curl -y
# Instalar bash
# RUN add-apt-repository ppa:ondrej/php
# 
# RUN apt-get install php-7.4 libapache2-mod-php7.4 -y
# RUN apt-get install mariadb-server
# EXPOSE 80