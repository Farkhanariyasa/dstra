FROM php:8.1.16-fpm

ARG PHPGROUP
ARG PHPUSER

ENV PHPGROUP=${PHPGROUP}
ENV PHPUSER=${PHPUSER}

RUN adduser -g ${PHPGROUP} -s /bin/sh -D ${PHPUSER}; exit 0

RUN sed -i "s/user = www-data/user = ${PHPUSER}/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = ${PHPGROUP}/g" /usr/local/etc/php-fpm.d/www.conf

RUN apt-get update && apt-get install -y libzip-dev libicu-dev
RUN docker-php-ext-install pdo pdo_mysql zip

# ext-intl and mysqli
RUN apt-get install -y libicu-dev
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl mysqli

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]