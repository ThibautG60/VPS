FROM public.ecr.aws/docker/library/php:8.2-apache
RUN docker-php-ext-install opcache && a2enmod rewrite
EXPOSE 80