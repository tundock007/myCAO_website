FROM wordpress:latest

# Copy WordPress files to html directory during build (not relying on entrypoint)
RUN cp -r /usr/src/wordpress/* /var/www/html/ && \
    chown -R www-data:www-data /var/www/html

# Copy custom theme
COPY --chown=www-data:www-data wp-content/themes/mycao-theme /var/www/html/wp-content/themes/mycao-theme

EXPOSE 80

CMD ["apache2-foreground"]
