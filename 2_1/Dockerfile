FROM php:8.2-apache

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html/

EXPOSE 80 

CMD ["apache2ctl", "-D", "FOREGROUND"]