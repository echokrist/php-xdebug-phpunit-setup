FROM php:latest

RUN apt-get update
RUN apt install git -y

# Install Xdebug and necessary extensions
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set up working directory
WORKDIR /app

# Copy project files
COPY . .

# Copy Xdebug configuration
COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Install dependencies
RUN composer install

# Expose PHP and Xdebug ports
EXPOSE 9001 52295

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:9001", "-t", "public"]
