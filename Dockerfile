FROM wordpress:latest

# Copy WordPress files to html directory during build
RUN cp -r /usr/src/wordpress/* /var/www/html/ && \
    chown -R www-data:www-data /var/www/html

# Copy pre-configured wp-config.php (so it doesn't ask for DB setup)
COPY --chown=www-data:www-data wp-config.php /var/www/html/wp-config.php

# Copy custom theme
COPY --chown=www-data:www-data wp-content/themes/mycao-theme /var/www/html/wp-content/themes/mycao-theme

# Create .htaccess for HTTPS and WordPress permalinks
RUN echo 'SetEnvIf X-Forwarded-Proto "https" HTTPS=on\n\n# BEGIN WordPress\n<IfModule mod_rewrite.c>\nRewriteEngine On\nRewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]\nRewriteBase /\nRewriteRule ^index\\.php$ - [L]\nRewriteCond %{REQUEST_FILENAME} !-f\nRewriteCond %{REQUEST_FILENAME} !-d\nRewriteRule . /index.php [L]\n</IfModule>\n# END WordPress' > /var/www/html/.htaccess && \
    chown www-data:www-data /var/www/html/.htaccess

# Enable Apache mod_rewrite
RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
