FROM wordpress:latest

# Install additional PHP extensions if needed
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set recommended PHP settings for WordPress
RUN { \
    echo 'upload_max_filesize = 64M'; \
    echo 'post_max_size = 64M'; \
    echo 'max_execution_time = 300'; \
    echo 'memory_limit = 256M'; \
} > /usr/local/etc/php/conf.d/uploads.ini

# Copy custom wp-config if exists
COPY --chown=www-data:www-data . /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]
