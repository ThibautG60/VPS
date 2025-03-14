FROM php:apache
RUN docker-php-ext-install opcache && a2enmod rewrite && php-intl && php-calendar
EXPOSE 80