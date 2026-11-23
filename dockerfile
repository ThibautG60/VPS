FROM public.ecr.aws/docker/library/php:8.6.0RC4-apache
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev git unzip libzip-dev
RUN docker-php-ext-install pdo pdo_mysql zip && a2enmod rewrite headers expires deflate
COPY --from=public.ecr.aws/docker/library/composer:2 /usr/bin/composer /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
WORKDIR /var/www/html
EXPOSE 80