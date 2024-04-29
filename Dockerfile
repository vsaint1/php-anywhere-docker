# php 8.3 version with fastcgi
FROM php:8.3-fpm 

# user and uid
ARG user=vsantos1
ARG uid=1000

# dependencies, install what you need
RUN apt-get update -y && apt-get install -y openssl zip unzip libcurl4-openssl-dev libxml2-dev libonig-dev zlib1g-dev libpng-dev libjpeg-dev unixodbc-dev

# cleanup
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# php extensions 
RUN docker-php-ext-install pdo mbstring exif pcntl bcmath gd sockets

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -G www-data,root -u $uid -d /home/$user $user

RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# install redis, remove if you don't need it
RUN pecl install -o -f redis sqlsrv pdo_sqlsrv \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

WORKDIR /var/www

USER $user