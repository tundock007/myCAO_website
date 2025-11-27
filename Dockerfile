FROM wordpress:latest

# The wordpress:latest image already has everything set up
# We just need to copy our custom theme

# Copy custom theme to the themes directory
COPY wp-content/themes/mycao-theme /usr/src/wordpress/wp-content/themes/mycao-theme

# Use the default WordPress entrypoint which handles everything
