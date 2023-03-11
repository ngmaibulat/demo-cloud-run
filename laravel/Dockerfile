# Use the official PHP 7.4 image as a base
FROM php:8.2-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the source code to the container
COPY . .

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    libzip-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Install Nginx
RUN apt-get update && apt-get install -y nginx

# Copy the Nginx configuration file
COPY nginx.conf /etc/nginx/nginx.conf

# Expose the port
EXPOSE 8080

# Start both PHP-FPM and Nginx
CMD service nginx start && php-fpm
