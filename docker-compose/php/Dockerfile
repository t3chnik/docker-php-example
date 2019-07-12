FROM php:fpm

RUN apt-get update && apt-get upgrade -yqq

# xdebug:
RUN pecl install xdebug && docker-php-ext-enable xdebug
COPY xdebug.ini /tmp/xdebug.ini
RUN cat /tmp/xdebug.ini >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini && \
    rm /tmp/xdebug.ini

RUN groupadd -g 1000 www && \
    useradd -u 1000 -ms /bin/bash -g www www
USER www
COPY --chown=www:www . /var/www
EXPOSE 9000
CMD ["php-fpm"]
