FROM php:apache
RUN docker-php-ext-install opcache && a2enmod rewrite
EXPOSE 80