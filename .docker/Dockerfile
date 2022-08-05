FROM php:7.4-apache
RUN apt-get update && apt-get install -y \
    libzip-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libfreetype6-dev \
    zip \
    unzip \
    curl \
    npm \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install exif \
    && docker-php-ext-install pcntl \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install zip \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install gd \
    && mkdir /app \
    && a2enmod rewrite
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash \
    && apt-get install -y nodejs
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /app
COPY --from=composer /usr/bin/composer /usr/bin/composer
