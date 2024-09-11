FROM ubuntu:latest

RUN apt-get update
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y apache2 php php-cli php-mysql 
RUN apt-get clean 
RUN echo "ServerName localhost" >> /etc/apache2/sites-available/000-default.conf

COPY index.php /var/www/html/
COPY style.css /var/www/html/

CMD ["apache2ctl", "-D", "FOREGROUND"]