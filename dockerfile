FROM php:apache
RUN docker-php-ext-install opcache && a2enmod rewrite && php-intl
EXPOSE 80