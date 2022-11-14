FROM php:8.1.4-apache

ARG USER_ID
ARG USER_NAME

RUN apt-get update && apt-get install -y libmcrypt-dev \
    default-mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
&& docker-php-ext-install mysqli pdo_mysql

RUN a2enmod rewrite

RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer

RUN groupadd -g $USER_ID $USER_NAME
RUN useradd -u $USER_ID -g $USER_NAME -s /bin/bash $USER_NAME

USER ${USER_NAME}

CMD apachectl -DFOREGROUND
