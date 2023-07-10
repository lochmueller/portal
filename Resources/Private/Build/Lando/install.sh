#!/bin/bash

apt-get install build-essential -y --no-install-recommends \
    libgmp-dev  \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev \
    libwebp-dev

# Enable gmp extension
echo '=== Configure packages'
docker-php-ext-configure gd --enable-gd --with-freetype --with-jpeg --with-webp
docker-php-ext-install -j "$(nproc)" gd gmp
