# Use official PHP image with Apache
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Copy all project files to container
COPY . /var/www/html/

# Install Postgres PDO extension for PHP
RUN docker-php-ext-install pdo pdo_pgsql

# Expose port 80 (default HTTP)
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
