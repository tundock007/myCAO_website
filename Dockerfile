FROM wordpress:latest

# Copy WordPress files to html directory during build
RUN cp -r /usr/src/wordpress/* /var/www/html/ && \
    chown -R www-data:www-data /var/www/html

# Copy pre-configured wp-config.php (so it doesn't ask for DB setup)
COPY --chown=www-data:www-data wp-config.php /var/www/html/wp-config.php

# Copy custom theme
COPY --chown=www-data:www-data wp-content/themes/mycao-theme /var/www/html/wp-content/themes/mycao-theme

# Create .htaccess for HTTPS
RUN echo 'SetEnvIf X-Forwarded-Proto "https" HTTPS=on' > /var/www/html/.htaccess && \
    chown www-data:www-data /var/www/html/.htaccess

EXPOSE 80

CMD ["apache2-foreground"]
