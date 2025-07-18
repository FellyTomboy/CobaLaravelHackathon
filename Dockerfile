FROM php:8.2-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip zip curl libpq-dev git \
    && docker-php-ext-install pdo pdo_pgsql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
