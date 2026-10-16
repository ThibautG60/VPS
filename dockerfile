FROM public.ecr.aws/docker/library/php:8.2-apache
RUN a2enmod rewrite headers expires deflate
WORKDIR /var/www/html
EXPOSE 80