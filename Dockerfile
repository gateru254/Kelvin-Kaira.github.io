# Use official PHP + Apache image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install PHP extensions needed for Laravel
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libonig-dev libpng-dev libxml2-dev nodejs npm \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy project files to container
COPY . .

# Install Composer (from official composer image)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Make storage and bootstrap/cache writable
RUN chmod -R 775 storage bootstrap/cache

# Install Node.js dependencies and build assets if using Laravel Mix / Vite
RUN npm install
RUN npm run build

# Expose port for Render
EXPOSE 10000

# Start Apache and cache config at runtime
CMD php artisan config:cache && apache2-foreground
