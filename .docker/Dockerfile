FROM php:7.1.8-apache

MAINTAINER jfernancordova@gmail.com

# apt-get
RUN apt-get update
RUN apt-get -y install bzip2 git nano wget zip unzip
RUN apt-get -y install libmcrypt-dev libzzip-dev zziplib-bin zlib1g-dev

# MySQL client for Initial Tasks
RUN apt-get update &&\
	apt-get install -y mysql-client

# docker-php ext-install:
RUN docker-php-ext-install mcrypt
RUN docker-php-ext-install zip

# pdo_mysql
RUN docker-php-ext-install pdo_mysql

# rsyslog: (for Loggly etc)
RUN apt-get update && apt-get -y install rsyslog && apt-get clean
RUN sed -i '1s/^/$MaxMessageSize 64k\n/' /etc/rsyslog.conf

# composer:
COPY .docker/composer-install.sh /tmp
RUN /tmp/composer-install.sh && mv /usr/local/bin/composer.phar /usr/local/bin/composer

# DIR
WORKDIR /docker-laravel-api-dev
COPY . ./

# apache:
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# composer configuration:
COPY ./composer.json ./composer.json
COPY ./composer.lock ./composer.lock

# www-data:
RUN chown -R www-data:www-data ./ && a2enmod rewrite
USER root
