FROM php:8.2-fpm

# Install system dependencies & Node.js
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application files
COPY . .

# Install PHP dependencies without running post-install scripts during build
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Install Node dependencies and build frontend assets
RUN npm install
RUN npm run build

EXPOSE 8000

# Run package discovery and launch server at container startup
CMD php artisan package:discover --ansi && php artisan serve --host=0.0.0.0 --port=8000