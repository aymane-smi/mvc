FROM php:7.4-apache
WORKDIR /var/www/html
RUN a2enmod rewrite && service apache2 restart
RUN docker-php-ext-install pdo pdo_mysql
#RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli