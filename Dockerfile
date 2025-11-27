FROM wordpress:latest

# Copy WordPress files to html directory during build
RUN cp -r /usr/src/wordpress/* /var/www/html/ && \
    chown -R www-data:www-data /var/www/html

# Copy custom theme
COPY --chown=www-data:www-data wp-content/themes/mycao-theme /var/www/html/wp-content/themes/mycao-theme

# Copy and apply HTTPS/URL fix to wp-config
COPY wp-config-extra.php /var/www/html/wp-config-extra.php
RUN chown www-data:www-data /var/www/html/wp-config-extra.php

# Add the include to wp-settings.php loading (prepend to wp-config-sample for reference)
RUN sed -i "1a\\if (file_exists(dirname(__FILE__) . '/wp-config-extra.php')) { require_once(dirname(__FILE__) . '/wp-config-extra.php'); }" /var/www/html/wp-config-sample.php

# Create .htaccess for proper HTTPS handling
RUN echo 'SetEnvIf X-Forwarded-Proto "https" HTTPS=on' > /var/www/html/.htaccess && \
    chown www-data:www-data /var/www/html/.htaccess

EXPOSE 80

CMD ["apache2-foreground"]
