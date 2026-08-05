FROM php:8.3-apacheff

# OCI Image Metadata
LABEL org.opencontainers.image.title="Enterprise Inventory" \
      org.opencontainers.image.description="Enterprise Inventory Management Platform" \
      org.opencontainers.image.vendor="Jeevan Rana" \
      org.opencontainers.image.licenses="MIT"

# Install PHP extension and configure Apache
RUN docker-php-ext-install mysqli && \
    a2enmod rewrite && \
    echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy application
COPY . /var/www/html/

# Set application ownership
RUN chown -R www-data:www-data /var/www/html

# Working directory
WORKDIR /var/www/html

# Run as non-root user
USER www-data

# Apache Port
EXPOSE 80

# Health Check
HEALTHCHECK --interval=30s \
            --timeout=5s \
            --start-period=30s \
            --retries=3 \
            CMD curl --fail http://localhost/health.php || exit 1

