FROM wordpress:latest

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# PHP settings
RUN { \
    echo 'upload_max_filesize = 64M'; \
    echo 'post_max_size = 64M'; \
    echo 'max_execution_time = 300'; \
    echo 'memory_limit = 256M'; \
} > /usr/local/etc/php/conf.d/uploads.ini

# Copy custom theme
COPY --chown=www-data:www-data wp-content/themes/mycao-theme /var/www/html/wp-content/themes/mycao-theme

EXPOSE 80

CMD ["apache2-foreground"]
